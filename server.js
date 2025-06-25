const express = require('express');
const path    = require('path');
const app     = express();

app.use(express.static(path.join(__dirname, 'public')));          // serve static files
app.get('*', (_,res)=>res.sendFile(path.join(__dirname,'public/index.html')));

const port = process.env.PORT || 3000;
app.listen(port, () => console.log(`Server up on ${port}`));
