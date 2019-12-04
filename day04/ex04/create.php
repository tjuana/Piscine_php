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
echo "OK\n";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Created account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="index.html">Return<a>
</body>
</html>
