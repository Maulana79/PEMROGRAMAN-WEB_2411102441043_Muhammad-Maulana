<?php
$jumlahUang = $_POST['jumlahUang'];
$sisaUang = $jumlahUang;

$pecahan = [100000, 50000, 20000, 5000, 100, 50];
$hasilPecahan = [];

foreach ($pecahan as $nilai) {
    if ($sisaUang >= $nilai) {
        $jumlah = (int)($sisaUang / $nilai);
        $sisaUang %= $nilai; 
        $hasilPecahan[$nilai] = $jumlah;
    } else {
        $hasilPecahan[$nilai] = 0;
    }
}
?>

<html>
    <head>
        <title>Hasil Pecahan Uang</title>
    </head>
    <body>
        <h1>Hasil Pecahan Uang Tunai (Rp. <?php echo number_format($jumlahUang, 0, ',', '.'); ?>)</h1>
        <table>
            <?php
            foreach ($hasilPecahan as $nilai => $jumlah) {
                echo "<tr><td>Jumlah Rp. " . number_format($nilai, 0, ',', '.') . "</td><td>:</td><td>" . $jumlah . " lembar</td></tr>";
            }
            ?>
        </table>
    </body>
</html>