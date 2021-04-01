<?php
$counter = 1;
while ($counter <= 10) {
    echo "ini adalah perulangan while loop ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}
