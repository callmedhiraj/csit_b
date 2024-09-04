<html>
    <head>
        <title></title>

    </head>
    <link type="text/css" href="styles.css" />
<body>
<?php
/**
 * Specially designed to handle arrays in effecient manner
 * 
 * 
 */
$arr = array(10, 'Ravi', 'Nistha', NULL, true, false);

/*
echo '<pre>';
print_r($arr);// var_dump
echo '</pre>';

echo '<pre>';
var_dump($arr);// var_dump
echo '</pre>';
*/
for($i = 0; $i< sizeof($arr); $i++){
    echo $arr[$i] . '<br />';
}

//foreach implementation
foreach($arr as $key=>$value){
echo '<br />' .  $value;
}

//associative array
$data = array('roll'=>101, 
            'name'=>'Ramita Poudel',
            'marks'=>88.65 );
echo '<pre>';
print_r($data);// var_dump
echo '</pre>';

foreach($data as $key=>$value){
    echo '<div style="color:red">'.$value . '</div>';
}

?>
</body>
</html>