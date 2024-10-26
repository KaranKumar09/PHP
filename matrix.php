<?php
// Function to multiply a 3x4 matrix with a 4x3 matrix
function multiplyMatrices($mat1, $mat2, &$res) {
    $rowsMat1 = 3; // Number of rows in the first matrix
    $colsMat1 = 4; // Number of columns in the first matrix (same as the number of rows in the second matrix)
    $colsMat2 = 3; // Number of columns in the second matrix

    // Iterate over the rows of the first matrix
    for ($i = 0; $i < $rowsMat1; $i++) {
        // Iterate over the columns of the second matrix
        for ($j = 0; $j < $colsMat2; $j++) {
            // Initialize the result matrix element
            $res[$i][$j] = 0;
            // Perform the dot product of the row of mat1 and the column of mat2
            for ($k = 0; $k < $colsMat1; $k++) {
                $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
            }
        }
    }
}

// 3x4 Matrix (3 rows, 4 columns)
$mat1 = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12)
);

// 4x3 Matrix (4 rows, 3 columns)
$mat2 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
    array(10, 11, 12)
);

// Initialize the result matrix as a 3x3 matrix (3 rows, 3 columns)
$res = array_fill(0, 3, array_fill(0, 3, 0));

// Multiply the matrices
multiplyMatrices($mat1, $mat2, $res);

// Output the result
echo "Resultant Matrix:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $res[$i][$j] . " ";
    }
    echo "\n";
}
?>
