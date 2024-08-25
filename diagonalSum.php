<?php
function diagonalSum($matrix)
{
  $n = count($matrix);
  $sum = 0;

  for ($i = 0; $i < $n; $i++) {
    $sum += $matrix[$i][$i] + ($i !== $n - $i - 1 ? $matrix[$i][$n - $i - 1] : 0);
  }

  return $sum;
}
echo diagonalSum([
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
]);

echo "\n";

echo diagonalSum([
  [1, 2, 3, 4],
  [5, 6, 7, 8],
  [9, 10, 11, 12],
  [13, 14, 15, 16]
]);

?>