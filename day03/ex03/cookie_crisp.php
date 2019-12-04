<?php
$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];

switch ($action) {
    case 'set':
        setcookie($name, $value, time() + 77600);
        break;
    case 'get':
        if ($_COOKIE[$name]) {
            echo $_COOKIE[$name] . "\n";
        }
        break;
    case 'del':
        setcookie($name, "", time() - 3700);
        print_r($_COOKIE);
        break;
}
?>