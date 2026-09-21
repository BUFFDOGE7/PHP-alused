<?php
$input = trim(readline("Enter an integer between 1 and 9: "));

$n = filter_var($input, FILTER_VALIDATE_INT, [
    "options" => ["min_range" => 1, "max_range" => 9]
]);

if ($n === false) {
    echo "Please enter an integer between 1 and 9" . PHP_EOL;
    exit(1);
}

$nn  = $n . $n;        // string, e.g. "22"
$nnn = $n . $n . $n;   // string, e.g. "222"

$sum = $n + (int)$nn + (int)$nnn;

echo "$n + $nn + $nnn = $sum" . PHP_EOL;