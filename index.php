<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                break;
            default:
                $result = "Invalid operator";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="POST">
        <input type="text" name="num1" placeholder="Enter 1st number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter 2nd number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php if ($result !== ""): ?>
        <h3>Result: <?= $result ?></h3>
    <?php endif; ?>
</body>
</html>
