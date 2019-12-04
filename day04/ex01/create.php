<?php
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$submit = $_POST['submit'];

if (!$login || !$passwd || $submit != "OK") {
    exit("ERROR\n");
} if (!file_exists('../private/passwd')){
    if (!file_exists('../private/')) {
        mkdir('../private');
    }
    $arr = array();
} else{
    $arr = unserialize(file_get_contents('../private/passwd'));
    
} foreach ($arr as $key => $user) {
    if ($user['login'] == $login) {
        exit("ERROR\n");
   }
}
$arr[$key + 1]['login'] = $login;
$arr[$key + 1]['passwd'] = hash("whirlpool", $passwd);
file_put_contents('../private/passwd', serialize($arr));
exit("OK\n");
?>
