<?php
$saldo = $_POST['saldo'];
$N = $_POST['bulan'];
$biayaAdmin = 9000;
$batasSaldo = 1100000; 

echo "<h1>Laporan Saldo Akhir</h1>";
echo "<p>Saldo Awal: Rp. " . number_format($saldo, 0, ',', '.') . "</p>";
echo "<p>Jangka Waktu: " . $N . " Bulan</p>";
echo "<table border='1'><tr><th>Bulan ke-</th><th>Bunga (%)</th><th>Biaya Admin (Rp)</th><th>Saldo Akhir (Rp)</th></tr>";

for ($bulan = 1; $bulan <= $N; $bulan++) {
    if ($saldo < $batasSaldo) {
        $bungaRate = 0.03 / 12; 
        $bungaRatePersen = "3% p.a";
    } else {
        $bungaRate = 0.04 / 12; 
        $bungaRatePersen = "4% p.a";
    }
    
    $bungaDidapat = $saldo * $bungaRate;
    $saldoAkhirBulan = $saldo + $bungaDidapat - $biayaAdmin;
    
    $saldo = $saldoAkhirBulan;

    echo "<tr>";
    echo "<td>" . $bulan . "</td>";
    echo "<td>" . $bungaRatePersen . "</td>";
    echo "<td>" . number_format($biayaAdmin, 0, ',', '.') . "</td>";
    echo "<td>" . number_format($saldo, 2, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<h2>Saldo Akhir setelah " . $N . " bulan adalah: **Rp. " . number_format($saldo, 2, ',', '.') . "**</h2>";
?>