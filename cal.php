<!DOCTYPE html>
<html>
<head>
    <title>Calculator in PHP</title>
</head>
<body>
<form method="POST" action="">
    Enter first number:
    <input type="number" name="num1" id="num1" step="any" required><br><br>

    Enter second number:
    <input type="number" name="num2" id="num2" step="any" required><br><br>

    Select operation:
    <select name="operation" id="operation" required>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Παίρνουμε τα δεδομένα που εισάγει ο χρήστης στη φόρμα
    $a = (float) $_POST['num1'];
    $b = (float) $_POST['num2'];
    $operation = $_POST['operation'];

    // H συνάρτηση για τους υπολογισμούς
    function calculate($a, $b, $operation) {
        switch ($operation) {
            case 'add':
                return $a + $b;
            case 'subtract':
                return $a - $b;
            case 'multiply':
                return $a * $b;
            case 'divide':
                return $b != 0 ? $a / $b : "Division by zero";
            default:
                return "Invalid operation";
        }
    }

    // Εκτέλεση του υπολογισμού και εμφάνιση του αποτελέσματος
    $result = calculate($a, $b, $operation);
    echo "<h3>Result: $result</h3>";
}
?>
</body>
</html>