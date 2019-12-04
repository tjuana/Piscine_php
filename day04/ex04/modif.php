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
            echo "OK\n";
        }else {
            exit("ERROR\n");
        }
   }
   header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<a href="index.html">Return</a>    
</body>
</html>