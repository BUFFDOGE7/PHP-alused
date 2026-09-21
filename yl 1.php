<?php
const KURSS = 15.6466; // 1 EUR = 15,6466 EEK

$tulemus = null;
$viga = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sisend = str_replace(",", ".", trim($_POST["kroonid"] ?? ""));

    if (is_numeric($sisend) && $sisend >= 0) {
        $eurod = (float)$sisend / KURSS;
        $tulemus = round($eurod, 2);
    } else {
        $viga = "Palun sisesta korrektne positiivne arv";
    }
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kroonid eurodeks</title>
</head>
<body>
    <h1>Kroonid → eurod</h1>

    <form method="post">
        <label>Summa kroonides:
            <input type="text" name="kroonid" required>
        </label>
        <button type="submit">Teisenda</button>
    </form>

    <?php if ($tulemus !== null): ?>
        <p>Tulemus: <strong><?= number_format($tulemus, 2, ",", " ") ?> €</strong></p>
    <?php elseif ($viga): ?>
        <p style="color:red;"><?= htmlspecialchars($viga) ?></p>
    <?php endif; ?>
</body>
</html>