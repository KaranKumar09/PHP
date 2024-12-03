<!-- convert binary to decimal -->
 <?php
 $binary = "1010";
 $decimal = bindec($binary);
 echo "Decimal value of $binary is: $decimal";
 ?>


<!-- convert decimal number to binary -->
<?php
$decimal = 10;
$binary = decbin($decimal);
echo "Binary value of $decimal is: $binary";
?>


<!-- calculate power using pow() function -->
<?php
$base = 2;
$exp = 3;
$result = pow($base, $exp);
echo "$base raised to the power of $exp is: $result";
?> 


<!-- Copy String Without Using strcpy() -->
<?php
$str1 = "Hello";
$str2 = $str1;
echo "Copied string is: $str2";
?>


<!-- Check Whether a Character is an Alphabet or Not -->
<?php
$char = 'A';
if (ctype_alpha($char)) {
    echo "$char is an alphabet.";
} else {
    echo "$char is not an alphabet.";
}
?>


<!-- Sum of Natural Numbers Using while Loop -->
<?php
$n = 10;
$sum = 0;
$i = 1;
while ($i <= $n) {
    $sum += $i;
    $i++;
}
echo "Sum of natural numbers up to $n is: $sum";
?>


<!-- Find Missing Numbers in Array -->
<?php
function findMissing($arr, $n) {
    $total_sum = ($n * ($n + 1)) / 2;
    $array_sum = array_sum($arr);
    return $total_sum - $array_sum;
}

$arr = array(1, 2, 4, 5, 6);
$n = 6;
echo "Missing number is: " . findMissing($arr, $n);
?>

<!-- Print all Non-Repeated Elements in an Array -->
<?php
$arr = array(4, 5, 4, 5, 6, 7, 8, 6);
$non_repeated = array_filter(array_count_values($arr), function($count) {
    return $count == 1;
});
echo "Non-repeated elements are: " . implode(", ", array_keys($non_repeated));
?>


<!-- Find Matrix Multiplication -->
<?php
function multiplyMatrix($matrix1, $matrix2) {
    $result = [];
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < count($matrix2); $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

$matrix1 = [[1, 2], [3, 4]];
$matrix2 = [[5, 6], [7, 8]];
$result = multiplyMatrix($matrix1, $matrix2);

echo "Matrix Multiplication Result:<br>";
foreach ($result as $row) {
    echo implode(" ", $row) . "<br>";
}
?>


<!-- Simple Calculator using switch Statement -->
<?php
$operator = '+';
$num1 = 10;
$num2 = 5;
switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        echo $num1 / $num2;
        break;
    default:
        echo "Invalid operator";
}
?>


<!-- Find Determinant of a Matrix -->
<?php
function determinant($matrix) {
    if (count($matrix) == 2) {
        return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
    }
    $det = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $subMatrix = [];
        foreach ($matrix as $key => $row) {
            if ($key != 0) {
                $subMatrix[] = array_slice($row, 0, $i) + array_slice($row, $i + 1);
            }
        }
        $det += pow(-1, $i) * $matrix[0][$i] * determinant($subMatrix);
    }
    return $det;
}

$matrix = [[1, 2], [3, 4]];
echo "Determinant is: " . determinant($matrix);
?>


<!-- Display Inverted Half Pyramid of Numbers -->
<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}
?>


<!-- Display Inverted Full Pyramid of Stars -->
<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    echo str_repeat(" ", $n - $i);
    echo str_repeat("* ", $i);
    echo "<br>";
}
?>


<!-- Display Half Pyramid of Alphabets -->
<?php
$n = 5;
$alpha = 'A';
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$alpha ";
    }
    $alpha++;
    echo "<br>";
}
?>


<!-- Display Inverted Half Pyramid of Stars -->
<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    echo str_repeat("* ", $i) . "<br>";
}
?>


<!-- Display Half Pyramid of Stars -->
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("* ", $i) . "<br>";
}
?>


<!-- Find the Frequency of a Character -->
<?php
$str = "hello world";
$char = 'l';
$frequency = substr_count($str, $char);
echo "Frequency of $char in '$str' is: $frequency";
?>

<!-- Calculate Length of String without Using strlen() Function -->
<?php
$str = "Hello World";
$length = 0;
while (isset($str[$length])) {
    $length++;
}
echo "Length of string is: $length";
?>


<!-- Swap Elements Using Call by Reference -->
<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 5;
$b = 10;
swap($a, $b);
echo "After swapping: a = $a, b = $b";
?>


<!-- Program to Check Vowel or Consonant -->
<?php
$char = 'a';
if (in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u'])) {
    echo "$char is a vowel.";
} else {
    echo "$char is a consonant.";
}
?>


<!-- Find the Roots of a Quadratic Equation -->
<?php
$a = 1;
$b = -3;
$c = 2;
$discriminant = $b * $b - 4 * $a * $c;
$root1 = (-$b + sqrt($discriminant)) / (2 * $a);
$root2 = (-$b - sqrt($discriminant)) / (2 * $a);
echo "Roots are $root1 and $root2";
?>


<!-- Generate Multiplication Table -->
<?php
$n = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . $n * $i . "<br>";
}
?>


<!-- Display Fibonacci Sequence -->
<?php
$n = 10;
$fib = [0, 1];
for ($i = 2; $i < $n; $i++) {
    $fib[] = $fib[$i - 1] + $fib[$i - 2];
}
echo implode(", ", $fib);
?>


<!-- Print Lowercase/Uppercase Alphabets -->
<?php
// Lowercase alphabets
echo "Lowercase alphabets: ";
for ($ch = 'a'; $ch <= 'z'; $ch++) {
    echo "$ch ";
}
echo "<br>";

// Uppercase alphabets
echo "Uppercase alphabets: ";
for ($ch = 'A'; $ch <= 'Z'; $ch++) {
    echo "$ch ";
}
?>


<!-- Print Armstrong Numbers Between Two Integers -->
<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = $temp / 10;
    }
    return $sum == $num;
}

$low = 100;
$high = 999;

echo "Armstrong numbers between $low and $high: ";
for ($i = $low; $i <= $high; $i++) {
    if (isArmstrong($i)) {
        echo "$i ";
    }
}
?>


<!-- Print Prime Numbers Between Two Integers -->
<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$low = 10;
$high = 50;

echo "Prime numbers between $low and $high: ";
for ($i = $low; $i <= $high; $i++) {
    if (isPrime($i)) {
        echo "$i ";
    }
}
?>


<!-- Find the Transpose of a Matrix -->
<?php
function transpose($matrix) {
    $transpose = [];
    foreach ($matrix as $row => $columns) {
        foreach ($columns as $column => $value) {
            $transpose[$column][$row] = $value;
        }
    }
    return $transpose;
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$result = transpose($matrix);

echo "Transpose of the matrix:<br>";
foreach ($result as $row) {
    echo implode(" ", $row) . "<br>";
}
?>

<!-- to Swap Elements -->
<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 10;
$b = 20;
echo "Before swapping: a = $a, b = $b<br>";
swap($a, $b);
echo "After swapping: a = $a, b = $b";
?>


<!-- Sum of Natural Numbers Using Function -->
<?php
function sumOfNaturalNumbers($n) {
    return ($n * ($n + 1)) / 2;
}

$n = 10;
echo "Sum of natural numbers up to $n is: " . sumOfNaturalNumbers($n);
?>


<!-- Access Array Elements Using PHP Program -->
<?php
$arr = array(1, 2, 3, 4, 5);

echo "Array elements are:<br>";
foreach ($arr as $element) {
    echo "$element<br>";
}
?>


<!-- Multiply Matrices by Passing it to a Function -->
<?php
function multiplyMatrix($matrix1, $matrix2) {
    $result = [];
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < count($matrix2); $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

$matrix1 = [[1, 2, 3], [4, 5, 6]];
$matrix2 = [[7, 8], [9, 10], [11, 12]];
$result = multiplyMatrix($matrix1, $matrix2);

echo "Matrix Multiplication Result:<br>";
foreach ($result as $row) {
    echo implode(" ", $row) . "<br>";
}
?>



