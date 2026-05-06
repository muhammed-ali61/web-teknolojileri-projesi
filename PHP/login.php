<?php

$kullanici = $_POST['kullanici'];
$sifre = $_POST['sifre'];

$kullanici = strtolower($kullanici);
$sifre = strtolower($sifre);

$dogru_kullanici = 'b251210376@sakarya.edu.tr';
$dogru_sifre = 'b251210376';


if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    include 'Hosgeldin.php';
} else {
    header('Location: ../login.html?hata=1');
    exit();
}

?>