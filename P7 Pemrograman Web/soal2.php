<?php
$jumlahUang = 1575250;
$sisaUang = $jumlahUang;

$a = (int)($sisaUang / 100000);
$sisaUang %= 100000;

$b = (int)($sisaUang / 50000);
$sisaUang %= 50000;

$c = (int)($sisaUang / 20000);
$sisaUang %= 20000;

$d = (int)($sisaUang / 5000);
$sisaUang %= 5000;

$e = (int)($sisaUang / 100);
$sisaUang %= 100;

$f = (int)($sisaUang / 50);
$sisaUang %= 50;

echo "Jumlah Rp. 100.000 : " . $a . "<br />";
echo "Jumlah Rp. 50.000: " . $b . "<br />";
echo "Jumlah Rp. 20.000: " . $c . "<br />";
echo "Jumlah Rp. 5.000: " . $d . "<br />";
echo "Jumlah Rp. 100: " . $e . "<br />";
echo "Jumlah Rp. 50: " . $f . "<br/>";
?>