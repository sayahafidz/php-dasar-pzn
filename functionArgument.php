<?php
function sayhallo($name = 'anon')
{
    echo "hello $name" . PHP_EOL;
}

sayhallo();
sayhallo('orang baik');
sayhallo('orang tidak baik');

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "total $first + $last = $total" . PHP_EOL;
    // return $total;
}

sum(100, 100);
sum('100', '100');
sum(true, false);

// variable length argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;

    }
    echo "total " . implode(' + ', $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5, 6, 7];
sumAll(10, 20, 30, 40, );
sumAll(...$values);
