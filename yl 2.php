<?php
$r = (float) str_replace(",", ".", readline("Sisesta ringi raadius: "));

$pindala = M_PI * $r ** 2;
$ymbermoot = 2 * M_PI * $r;

echo "Pindala: " . round($pindala, 2) . PHP_EOL;
echo "Ümbermõõt: " . round($ymbermoot, 2) . PHP_EOL;