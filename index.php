<?php

function find_single_number($arr) {
    $count = array_count_values($arr); // Count occurrences of each number
    
    foreach ($count as $number => $occurrences) {
        if ($occurrences === 1) {
            return $number; // Return the number that appears only once
        }
    }
    
    return null; // Return null if no single number is found (shouldn't normally happen with valid input)
}

// Example usage:
$array = array(5, 3, 4, 3, 4);
$single_number = find_single_number($array);

if ($single_number !== null) {
    echo "The single number that doesn't occur twice is: " . $single_number;
} else {
    echo "No single number found that doesn't occur twice.";
}

?>
