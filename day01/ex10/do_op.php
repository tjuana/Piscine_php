#!/usr/bin/php
<?php
if ($argc != 4){
    exit("Incorrect Parameters\n");
}
$v1 = trim(preg_replace('/[ \t]+/', '', $argv[1]));
$v2 = trim(preg_replace('/[ \t]+/', '', $argv[3]));
$oper = trim(preg_replace('/[ \t]+/', '', $argv[2]));

switch ($oper) {
    case "+":
       echo $v1 + $v2 . "\n";
        break;
    case "-":
       echo $v1 - $v2 . "\n";
        break;
    case "*":
       echo $v1 * $v2 . "\n";
        break;                
    case "/":
        echo $v1 / $v2 . "\n";
        break;
    case "%":
       echo $v1 % $v2 . "\n";
        break;            
    default:
        exit("Incorrect Parameters\n");
        break;
}
?>