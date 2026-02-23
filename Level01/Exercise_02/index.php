<?php 

echo "This file is is: " . __FILE__ . "<br>";
echo "The file is located in: " . __DIR__ . "<br>";
echo "This line's number is: " . __LINE__ . "<br>";

function testMagicConstant() {
    echo "This function is called: " . __FUNCTION__ . "<br>";
}

testMagicConstant();