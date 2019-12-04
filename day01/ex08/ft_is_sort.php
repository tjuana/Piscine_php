#!/usr/bin/php
<?php
function ft_is_sort($arr)
{
    $tmp = $arr;
    sort($tmp);
    foreach ($arr as $key => $value) {
        if ($value != $tmp[$key]) {
            return false;
        }
    }
    return true;
}
?>