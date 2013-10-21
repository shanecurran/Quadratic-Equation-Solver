<?php
/*
 *  Using the quadratic formula to solve a quadratic equation
 *
 *  ax² + bx + c
 *
 *  -b ± sqrt(b² - 4ac)
 *  ______________
 *        2a
 *
 *  @author Shane Curran
 */

function getSolutions($coefficients) {
   return array(
        (($coefficients[1] * -1) + sqrt((pow($coefficients[1], 2) - 4 * $coefficients[0] * $coefficients[2]))) / (2 * $coefficients[0]), // Possible value of x #1
        (($coefficients[1] * -1) - sqrt((pow($coefficients[1], 2) - 4 * $coefficients[0] * $coefficients[2]))) / (2 * $coefficients[0]) // Possible value of x #2
    );
}

// Example usage
$coefficients = array(
    1, // a
    -4, // b
    -14 // c
);

echo json_encode(getSolutions($coefficients));

?>