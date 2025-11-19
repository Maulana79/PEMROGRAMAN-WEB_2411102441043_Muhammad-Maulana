<?php
$target = 25;
$count = 0;
$bilanganMin = 1; 

echo "<h1>Pasangan Nilai (x, y, z) yang memenuhi x + y + z = " . $target . "</h1>";

for ($x = $bilanganMin; $x < $target; $x++) {
    for ($y = $bilanganMin; $y < $target; $y++) {
        $z = $target - $x - $y;

        if ($z >= $bilanganMin) {
            echo "x = " . $x . ", y = " . $y . ", z = " . $z . "<br>";
            $count++; 
        }
    }
}

echo "<h2>Jumlah penyelesaian : " . $count . "</h2>";
?>