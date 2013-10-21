<?php
/*
 *  Using the quadratic formula to solve a quadratic equation
 *
 *  ax² + bx + c = 0
 *
 *  -b ± sqrt(b² - 4ac)
 *  ______________
 *        2a
 *
 *  @author Shane Curran
 */

function getSolutions($coefficients) {
   return array(
        (($coefficients["b"] * -1) + sqrt((pow($coefficients["b"], 2) - 4 * $coefficients["a"] * $coefficients["c"]))) / (2 * $coefficients["a"]), // Possible value of x #1
        (($coefficients["b"] * -1) - sqrt((pow($coefficients["b"], 2) - 4 * $coefficients["a"] * $coefficients["c"]))) / (2 * $coefficients["a"]) // Possible value of x #2
    );
}

// Example usage
$coefficients = array(
    "a" => 1, // a
    "b" => -4, // b
    "c" => -14 // c
);

echo json_encode(getSolutions($coefficients));

?>