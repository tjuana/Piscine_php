#!/usr/bin/php
<?php
function ar($a, $b){
    $line = "abcdefghijklmnopqrstuvwxyz0123456789!\#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	for ($i=0; $i < strlen($a) || $i < strlen($b); $i++) { 
		if (stripos($line, $a[$i]) > stripos($line, $b[$i]))
            return 1;
        elseif (stripos($line, $a[$i]) < stripos($line, $b[$i]))
            return -1;
	}
}
$str = $argv[1];
for ($i=2; $i < $argc ; $i++) { 
	$str = $str." ".$argv[$i];
}
$str = trim($str);
$tab = preg_split('/ +/', $str);
usort($tab, 'ar');
if ($tab[0]){
    foreach ($tab as $elem){
        echo "$elem\n";
    }
}
?>