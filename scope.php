<?php
echo "Welcome to Scope and Local-Global Variables in PHP <br>";
// ==============CODE START======================= \\
$a = 98; // Global Variable
$b = 9; // This is also Global
function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Gives access to the global variable
    $a = 100;
    $b = 1000;
    echo "The value of your variable is $a and $b <br>";
}
echo "The value of your variable is $a and $b <br>";
printValue();
echo "The value of your variable is $a and $b <br>";
// echo var_dump($GLOBALS); // This prints all global variables
echo var_dump($GLOBALS['a']) . "<br>";
echo var_dump($GLOBALS['b']) . "<br>";
// ===============CODE END====================== \\
?>