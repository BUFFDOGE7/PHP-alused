<?php
$inputA = str_replace(",", ".", trim(readline("Enter the first number: ")));
$inputB = str_replace(",", ".", trim(readline("Enter the second number: ")));

if (!is_numeric($inputA) || !is_numeric($inputB)) {
    echo "Please enter valid numbers" . PHP_EOL;
    exit(1);
}

$a = (float)$inputA;
$b = (float)$inputB;

if ($a < $b) {
    $minimum = $a;
} else {
    $minimum = $b;
}

echo "The minimum of $a and $b is $minimum" . PHP_EOL;