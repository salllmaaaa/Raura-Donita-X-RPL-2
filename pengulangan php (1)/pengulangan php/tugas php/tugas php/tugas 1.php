<?php 
//1. HTML dalam PHP
$judul1 = "HTML didalam PHP";
echo "<h1>$judul1</h1>";
$judul2 = "=== Biodata Diri ===";
echo "<h1>$judul2</h1>";
echo "<hr>";

$nama = "Nama Lengkap : Raura Donita"; echo "<span>$nama</span>"; echo "<br/>";
$ttl = "Tempat, Tanggal Lahir : Jakarta, 03 Januari 2008"; echo "<span>$ttl</span>"; echo "<br/>";
$wa = "Nomor WA : 089508872965"; echo "<span>$wa</span>"; echo "<br/>";
$diri = "Deskripsi Diri : Seseorang Traveler dan anak SMK JP 1."; echo "<span>$diri</span>"; echo "<br/>";
echo "<br/>";
echo "<hr>";
//2. PHP dalam HTML
$judul = "PHP didalam HTML";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP didalam HTML</title>
</head>
<body>
    <h1><?= $judul; ?></h1>
    <h1><?= $judul2; ?></h1>
    <hr>
    <span><?= $nama ?></span> <br>
    <span><?= $ttl ?></span> <br>
    <span><?= $wa ?></span> <br>
    <span><?= $diri ?></span>
</body>
</html>