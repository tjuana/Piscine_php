<?php
$login = $_POST['login'];
$oldpw = $_POST['oldpw'];
$newpw = $_POST['newpw'];
$submit = $_POST['submit'];

if (!$login || !$newpw || !$oldpw || $submit != "OK") {
    exit("ERROR\n");
} if (!file_exists('../private/passwd'))
    exit();
$arr = unserialize(file_get_contents('../private/passwd'));
foreach ($arr as $key => $user) {
    if ($user['login'] == $login) {
        if ($user['passwd'] == hash("whirlpool", $oldpw)) {
            $arr[$key]['passwd'] = hash("whirlpool", $newpw);
            file_put_contents('../private/passwd', serialize($arr)); 
            exit("OK\n");
        }else {
            exit("ERROR\n");
        }
   }
}
?>