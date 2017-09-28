<?php

if ($argc < 2) {
    print("First argument is missing (integer, 10^N loops).\n");
    exit(1);
}

$pow = (int) $argv[1];

if (!$pow || $pow < 1) {
    print("The first argument have to be a positive integer\n");
    exit(1);
}

$limit = pow(10, $pow);

printf("Go for %d loops\n", $limit);

$s = microtime(true);

$i = 0;
do {
    $i++;
} while($i < $limit);

$e = microtime(true);
$diff = DateTime::createFromFormat('U.u', round($e-$s, 6));

echo $diff->format("H:i:s.u")."\n";

