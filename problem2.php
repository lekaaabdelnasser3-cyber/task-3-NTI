<?php
function calc($a, $b) {
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";

    if ($b != 0) {
        echo "Division: " . ($a / $b) . "<br>";
    } else {
        echo "Division: cannot divide by zero<br>";
    }
}

calc(10, 5);