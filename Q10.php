<?php
// Function to find the single number in an array using bitwise operations
function single_number($arr)
{
    // Initialize variables for storing ones, twos, and common bits between ones and twos
    $ones = 0;
    $twos = 0;
    $common_one_two = 0;

    // Iterate through the array
    for ($i = 0; $i < sizeof($arr); $i++)
    {
        // Update twos using bitwise OR and bitwise AND operations
        $twos  = $twos | ($ones & $arr[$i]);

        // Update ones using bitwise XOR operation
        $ones  = $ones ^ $arr[$i];

        // Calculate common bits between ones and twos
        $common_one_two = ~($ones & $twos);

        // Remove common bits from ones and twos
        $ones &= $common_one_two;
        $twos &= $common_one_two;
    }

    // Return the single number found
    return $ones;
}

// Define two arrays
$arr1 = array(5, 3, 4, 3, 5, 5, 3);
$arr2 = array(-1, 1, 1, -1, -1, 1, 0);

// Print the first array
print_r($arr1);
// Print the single number found in the first array
print_r('Single Number: ' . single_number($arr1) . "\n");

// Print the second array
print_r($arr2);
// Print the single number found in the second array
print_r('Single Number: ' . single_number($arr2) . "\n");
?>
