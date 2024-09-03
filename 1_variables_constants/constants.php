<?php
define('PI', 3.1415);
echo PI;
//define('PI', 3.141516);
$radius = 5.0;
$area = PI*pow($radius,2);
echo "The area of the circle having radius $radius is $area";
printf("\n The area of the circle having radius %.2f is %.2f", $radius, $area);
//real string
//concatination operator
echo '<br /> The area of the circle having radius '.  $radius . ' is '. $area;
?>