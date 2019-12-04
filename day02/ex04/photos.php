#!/usr/bin/php
<?php
if ($argc > 1) {
    
    $cont = file_get_contents($argv[1]);   
    preg_match_all("/<img .*?>/", $cont, $tmp);
    $store = $tmp[0];   
    preg_match_all("#[^\/]*\$#", $argv[1], $f_tmp);
    $f_name = $f_tmp[0][0]. "/";
    
    if (file_exists($f_name)) {
        exit ;
    }
    mkdir($f_name);
    foreach ($store as $img) {
        preg_match("/src=[\"'].*?[\"']/", $img, $ar_src);
        $src = substr($ar_src[0], 5, -1);
        preg_match("#[^\/]*\$#", $src, $name_tmp);
	    $name = $name_tmp[0];
	    if (preg_match("/http?.:\/\//", $src)) {
		    copy($src, $f_name . $name);
        }   
        else {
		    copy($argv[1] . "/" . trim($src, "/"), $f_name . $name);
	    }
    }
}
?>