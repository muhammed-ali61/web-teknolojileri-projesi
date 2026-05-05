<?php
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $konu = $_POST['konu'];
    $cinsiyet = $_POST['cinsiyet'];
    $mesaj = $_POST['mesaj'];
    $sozlesme = isset($_POST['sozlesme']) ? 'Kabul Edildi' : 'Kabul Edilmedi';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2>Gönderilen Form Bilgileri</h2>
    <table class="table table-bordered mt-4">
        <tr><td><strong>Ad</strong></td><td><?php echo $ad; ?></td></tr>
        <tr><td><strong>Soyad</strong></td><td><?php echo $soyad; ?></td></tr>
        <tr><td><strong>E-posta</strong></td><td><?php echo $email; ?></td></tr>
        <tr><td><strong>Telefon</strong></td><td><?php echo $telefon; ?></td></tr>
        <tr><td><strong>Konu</strong></td><td><?php echo $konu; ?></td></tr>
        <tr><td><strong>Cinsiyet</strong></td><td><?php echo $cinsiyet; ?></td></tr>
        <tr><td><strong>Mesaj</strong></td><td><?php echo $mesaj; ?></td></tr>
        <tr><td><strong>Sözleşme</strong></td><td><?php echo $sozlesme; ?></td></tr>
    </table>
    <a href="../iletisim.html" class="btn btn-dark mt-3">← Geri Dön</a>
</div>
</body>
</html>