<?php
function bit(bool $value): int {
    return $value ? 1 : 0;
}

echo "A B C | A AND (B OR C) | (A ~ B) OR NOT(C AND A)" . PHP_EOL;
echo str_repeat("-", 52) . PHP_EOL;

for ($a = 0; $a <= 1; $a++) {
    for ($b = 0; $b <= 1; $b++) {
        for ($c = 0; $c <= 1; $c++) {
            $expr1 = $a && ($b || $c);
            $expr2 = ($a === $b) || !($c && $a);

            printf("%d %d %d | %-14d | %d" . PHP_EOL, $a, $b, $c, bit($expr1), bit($expr2));
        }
    }
}