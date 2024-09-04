<?php
/**
 * for($initialization; $test_condition; $increment){
 * //some statament here
 * }
 * 
 * //nested for loop 
 * for($initialization; $test_condition; $increment){
 * //some statament here
 * //outer loop
 *  for($initialization; $test_condition; $increment){
 * //inner loop
 * }
 * }
 */
for($i = 0 ; $i< 50; $i++){
    echo 'square of '. $i . ' is '. pow($i, 2) . '<br />';
}