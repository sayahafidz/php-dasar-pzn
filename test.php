<?php
function triangle($n) {
    $f = 0;
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $k; $j++) {
            echo " ";
        }
        $k = $k - 1;
        for ($j = 0; $j <= $i; $j++) {
            echo "0 ";
            $f += 1;
        }
        echo "\n";
    }
    echo "jumlah bola $f";
}
$n = 10;
triangle($n);
?>