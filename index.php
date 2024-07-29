<?php

function triangle_area($base, $height) {
    $area = ($base * $height) / 2;
    return $area;
}

// Example usage:
$base = 5;
$height = 8;
$area = triangle_area($base, $height);
echo "The area of the triangle is: " . $area;

?>
