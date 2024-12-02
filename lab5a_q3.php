<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a q3</title>
</head>
<body>
<?php
function calculateArea($length, $width) {
        return $length * $width;
    }

    // Example usage of the function
    $length = 2; // Replace with any value
    $width = 4;   // Replace with any value
    $area = calculateArea($length, $width);

    // Display the result

    echo "The area of a rectangle with a width of $width and $length is $area";
    ?>
</body>
</html>