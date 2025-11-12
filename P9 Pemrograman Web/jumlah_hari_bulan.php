<?php
$bulanAngka = date("n");

switch ($bulanAngka) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $namaBln = date("F", mktime(0, 0, 0, $bulanAngka, 10)); // Mendapatkan nama bulan dari angka
        $jumlahHari = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $namaBln = date("F", mktime(0, 0, 0, $bulanAngka, 10));
        $jumlahHari = 30;
        break;
    case 2:
        $tahun = date("Y");
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $jumlahHari = 29;
        } else {
            $jumlahHari = 28;
        }
        $namaBln = date("F", mktime(0, 0, 0, $bulanAngka, 10));
        break;
    default:
        $namaBln = "Bulan Tidak Valid";
        $jumlahHari = 0;
}

echo "<h1>Jumlah Hari dalam Bulan Saat Ini</h1>";
echo "<p>Bulan Saat Ini: " . $namaBln . "</p>";
echo "<p>Jumlah Hari dalam bulan " . $namaBln . " adalah: **" . $jumlahHari . " hari**</p>";
?>