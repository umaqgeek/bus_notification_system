<?php
ob_start();
include('QRGenerator.php');
$ayat = (isset($_GET['ayat'])) ? ($_GET['ayat']) : ("Tak de ayat pun!");
$qrcode = new QRGenerator($ayat, 100);  // 100 is the qr size
print "<img src='". $qrcode->generate() ."'>"
?>

