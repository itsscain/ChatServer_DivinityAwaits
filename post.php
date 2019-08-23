<?php
$msg = $_GET['w'];
$logfile= 'RealTime.txt';
$fp = fopen($logfile, "a");
fwrite($fp, $msg);
fclose($fp);
?>
