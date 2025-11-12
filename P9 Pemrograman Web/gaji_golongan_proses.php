<?php
$jamKerja = $_POST['jamKerja'];
$golongan = $_POST['golongan'];
$upahLembur = 3000;
$batasNormal = 48;

$upahPerJam = 0;

switch ($golongan) {
    case 'A': $upahPerJam = 4000; break;
    case 'B': $upahPerJam = 5000; break;
    case 'C': $upahPerJam = 6000; break;
    case 'D': $upahPerJam = 7500; break;
    default: $upahPerJam = 0;
}

$totalGaji = 0;
$jamLembur = 0;
$gajiNormal = 0;
$gajiLembur = 0;

if ($jamKerja > $batasNormal) {
    $jamNormal = $batasNormal;
    $jamLembur = $jamKerja - $batasNormal;
    
    $gajiNormal = $jamNormal * $upahPerJam;
    $gajiLembur = $jamLembur * $upahLembur;
    $totalGaji = $gajiNormal + $gajiLembur;
} else {
    $gajiNormal = $jamKerja * $upahPerJam;
    $totalGaji = $gajiNormal;
}

echo "<h1>Hasil Perhitungan Upah Golongan</h1>";
echo "<p>Golongan Karyawan: " . $golongan . " (Upah/Jam: Rp. " . number_format($upahPerJam, 0, ',', '.') . ",-)</p>";
echo "<p>Jumlah Jam Kerja: " . $jamKerja . " jam</p>";
if ($jamLembur > 0) {
    echo "<p>Gaji Normal: Rp. " . number_format($gajiNormal, 0, ',', '.') . ",-</p>";
    echo "<p>Jam Lembur: " . $jamLembur . " jam (Rp. " . number_format($gajiLembur, 0, ',', '.') . ",-)</p>";
}
echo "<h2>Total Upah Diterima: **Rp. " . number_format($totalGaji, 0, ',', '.') . ",-**</h2>";
?>