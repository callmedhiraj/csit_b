<?php
$value = (int)"orchid  7";
switch($value){
    case 'MON':
        echo 'Today is Monday';
        break;
    case 'TUE':
        echo 'Today is Tuesday';
        break;
    case 'WED':
        echo 'Today is Wednesday';
        break;
    case 'THU':
        echo 'Today is Thursday';
        break;
    case 7:
        echo 'Today is Friday';
        break;
    default:
        echo "Some illegal value";
        break;
    

}