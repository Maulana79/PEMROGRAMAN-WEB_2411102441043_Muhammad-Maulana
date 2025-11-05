<?php
$saldoAwal = $_POST['saldoAwal'];
$bungaPersen = $_POST['bunga'];
$bulan = $_POST['bulan'];

$bungaDesimal = $bungaPersen / 100;

$saldoAkhir = $saldoAwal + ($saldoAwal * $bungaDesimal * $bulan);
?>

<html>
    <head>
        <title>Hasil Saldo Akhir</title>
    </head>
    <body>
        <h1>Hasil Perhitungan Saldo</h1>
        <p>Saldo Awal : Rp. <?php echo number_format($saldoAwal, 0, ',', '.'); ?></p>
        <p>Bunga Per Bulan: <?php echo $bungaPersen; ?> %</p>
        <p>Lama Menabung: <?php echo $bulan; ?> bulan</p>
        <p>Saldo akhir setelah <?php echo $bulan; ?> bulan adalah: **Rp. <?php echo number_format($saldoAkhir, 0, ',', '.'); ?>,**-</p>
    </body>
</html>