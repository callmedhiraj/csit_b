<?php
/**
 * <, >, <=, >=, ==, !=, === (type and value is checked)
 * same as that of C
 */
$num1 = 2;
$num2 = (int)"2";
if($num1 == $num2){
    echo "They both have same values";
}

if($num1 === $num2){
    echo "They both have values and type";
}else{
    echo "They both have values but different type";
}
 ?>