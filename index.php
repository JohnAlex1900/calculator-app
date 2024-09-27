<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form method="post" action="">
        <input type="number" name="num1" required>
        <button type="button" name="operation" value="add" class="operation-button">+</button>
        <button type="button" name="operation" value="subtract" class="operation-button">-</button>
        <button type="button" name="operation" value="multiply" class="operation-button">*</button>
        <button type="button" name="operation" value="divide" class="operation-button">/</button>
        <button type="button" name="operation" value="percentage" class="operation-button">%</button>
        <button type="button" name="operation" value="sqrt" class="operation-button">√</button>
        <button type="button" name="operation" value="exp" class="operation-button">^</button>
        <button type="button" name="operation" value="log" class="operation-button">log</button>
        <input type="number" name="num2" required>
        <button type="submit" name="calculate">=</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    echo "Cannot divide by zero.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
                break;
            case 'sqrt':
                $result = sqrt($num1);
                break;
            case 'exp':
                $result = pow($num1, $num2);
                break;
            case 'log':
                $result = log($num1, $num2);
                break;
            default:
                echo "Invalid operation.";
        }

        echo "Result: " . $result;
    }
    ?>
</body>
</html>