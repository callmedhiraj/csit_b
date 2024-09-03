<?php
/**
 * the general syntax to create a PHP variable is 
 * $var_name = value;
 * gettype($var_name)
 * echo "string data" ;
 */
$college = "Orchid International College";
echo $college;
$myAge = 37;
$is_college_opened = false;
echo "<br />" . gettype($college);//string

echo "<br />" . gettype($myAge);//integer
echo "<br />" . gettype($is_college_opened);//boolean
$data = array('roll'=>25,
                'name'=>'Radha',
                'marks'=>88.85
            );

echo 'The data type of the $data is '. gettype($data);

echo '<pre>';
print_r($data); 
echo '</pre>';
// trying to print an array using 
//echo will generate an error