<?php

function factorial($n) {
    // Base case: 0! and 1! are both 1
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Recursive case: n! = n * (n-1)!
        return $n * factorial($n - 1);
    }
}

// Example usage:
$result = factorial(5);
echo "Factorial of 5: $result";

?>