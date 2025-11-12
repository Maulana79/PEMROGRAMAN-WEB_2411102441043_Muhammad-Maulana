<?php
$tahun = $_POST['tahun'];
$status = "bukan";

if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    $status = "adalah";
}

echo "<h1>Hasil Pengecekan</h1>";
echo "<p>Tahun yang dimasukkan: " . $tahun . "</p>";
echo "<p>Tahun " . $tahun . " " . $status . " tahun kabisat.</p>";
?>