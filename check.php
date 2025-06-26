<?php
$secret = 'Qwerty1!';                 // ← change here any time
$guess  = $_GET['pw'] ?? '';

if ($guess === $secret) {
    echo 'Password accepted! Welcome, Administrator.';
} else {
    echo 'Incorrect.';
}
?>
