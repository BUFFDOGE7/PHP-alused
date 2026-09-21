<?php
$result = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = trim($_POST["n"] ?? "");

    $n = filter_var($input, FILTER_VALIDATE_INT, [
        "options" => ["min_range" => 1, "max_range" => 9]
    ]);

    if ($n === false) {
        $error = "Please enter an integer between 1 and 9!";
    } else {
        $nn  = $n . $n;
        $nnn = $n . $n . $n;
        $sum = $n + (int)$nn + (int)$nnn;

        $result = "$n + $nn + $nnn = $sum";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>n + nn + nnn</title>
</head>
<body>
    <h1>n + nn + nnn</h1>

    <form method="post">
        <label>Enter an integer between 1 and 9:
            <input type="text" name="n" required>
        </label>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== null): ?>
        <p><strong><?= htmlspecialchars($result) ?></strong></p>
    <?php elseif ($error !== null): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
</body>
</html>