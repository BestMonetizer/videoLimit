<?php
session_start();

$hash = $_GET['h'];
$streamname = $_GET['v'];
$originaltimestamp = $_GET['t'];

header('Content-Description: File Transfer');
header('Content-type: video/quicktime');
header("Content-length: " . filesize($streamname));
header("Expires: 0");
header("Content-Transfer-Encoding: binary");

$file = fopen($streamname, 'r');
echo stream_get_contents($file);    
fclose($file);
?>