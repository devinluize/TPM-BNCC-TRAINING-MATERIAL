<?php
// Simple PHP CLI Calculator
echo "Simple PHP CLI Calculator\n";
echo "--------------------------\n";

// Get the first number
echo "Enter the first number: ";
$firstNumber = (float)trim(fgets(STDIN));

// Get the operator
echo "Enter an operator (+, -, *, /): ";
$operator = trim(fgets(STDIN));

// Get the second number
echo "Enter the second number: ";
$secondNumber = (float)trim(fgets(STDIN));

// Perform the calculation
$result = null;
switch ($operator) {
    case '+':
        $result = $firstNumber + $secondNumber;
        break;
    case '-':
        $result = $firstNumber - $secondNumber;
        break;
    case '*':
        $result = $firstNumber * $secondNumber;
        break;
    case '/':
        if ($secondNumber != 0) {
            $result = $firstNumber / $secondNumber;
        } else {
            echo "Error: Division by zero is not allowed.\n";
            exit;
        }
        break;
    default:
        echo "Error: Invalid operator.\n";
        exit;
}

// Display the result
echo "Result: $firstNumber $operator $secondNumber = $result\n";
?>
