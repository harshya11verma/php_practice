<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Example usage
$terms = 10;
$result = fibonacci($terms);
echo implode(', ', $result);

readfile('rm.txt');
?>