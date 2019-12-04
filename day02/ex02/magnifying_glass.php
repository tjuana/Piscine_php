#!/usr/bin/php
<?php 
function loupe($symb) {
    return (str_replace($symb[1], strtoupper($symb[1]), $symb[0]));
}
if ($argc < 2 || !file_exists($argv[1]))
    exit();
$page = file_get_contents($argv[1]);
$page = preg_replace_callback('/<a.*?title="(.*?)">/', 'loupe', $page);
$page = preg_replace_callback('/<a.*?>(.*?)</', 'loupe', $page);
echo $page;
?>