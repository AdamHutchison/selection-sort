<?php

require __DIR__ . '/../vendor/autoload.php';

use SelectionSort\SelectionSort;

$list = [
    20,
    24,
    5,
    80,
    18,
    -1,
    0,
    27,
    39,
    3,
    -38,
];

$sortedList = (new SelectionSort($list))->getSortedList();

foreach ($sortedList as $item) {
    echo "{$item}\n";
}

die("All done!");
