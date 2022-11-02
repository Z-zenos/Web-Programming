<?php
// Function to check if a number is perfect
function isPerfectNumber(int $N): bool {
  // To store the sum
  $sum = 0;

  // Traversing through each number in the range [1,N)
  for ($i = 1; $i < $N; $i++) {
    if ($N % $i === 0) {
      $sum += $i;
    }
  }

  // returns True is sum is equal to the original number.
  return $sum === $N;
}

// Driver's code
$N = 6;

if (isPerfectNumber($N)) {
  echo $N." is Perfect Number", PHP_EOL;
}
else {
  echo $N." is Not Perfect Number", PHP_EOL;
}
