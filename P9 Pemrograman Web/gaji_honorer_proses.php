<?php
$jamKerja = $_POST['jamKerja'];
$upahNormal = 2000;
$upahLembur = 3000;
$batasNormal = 48;

$totalGaji = 0;
$gajiLembur = 0;
$jamLembur = 0;

if ($jamKerja > $batasNormal) {
    $jamLembur = $jamKerja - $batasNormal;
    $gajiNormal = $batasNormal * $upahNormal;
    $gajiLembur = $jamLembur * $upahLembur;
    $totalGaji = $gajiNormal + $gajiLembur;
} else {
    $gajiNormal = $jamKerja * $upahNormal;
    $totalGaji = $gajiNormal;
}

echo "<h1>Hasil Perhitungan Upah</h1>";
echo "<p>Jumlah Jam Kerja: " . $jamKerja . " jam</p>";
echo "<p>Upah Normal: Rp. " . number_format($gajiNormal, 0, ',', '.') . ",-</p>";
if ($jamLembur > 0) {
    echo "<p>Jam Lembur: " . $jamLembur . " jam (Rp. " . number_format($gajiLembur, 0, ',', '.') . ",-)</p>";
}
echo "<h2>Total Upah Diterima: **Rp. " . number_format($totalGaji, 0, ',', '.') . ",-**</h2>";
?>