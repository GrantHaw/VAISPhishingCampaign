<?php
/* log.php  – append each hit into logs/clicks.csv */

$dir  = __DIR__ . '/logs';
$file = $dir . '/clicks.csv';

if (!is_dir($dir)) mkdir($dir, 0700);           // private folder
$ts   = gmdate('c');                            // ISO timestamp (UTC)
$ip   = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ua   = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$tag  = isset($_GET['id']) ? $_GET['id'] : '';  // optional tracking code

$line = "$ts,$ip,\"$ua\",$tag\n";
file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

header('Content-Type: image/gif');              // 1-pixel GIF
echo base64_decode('R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
?>
