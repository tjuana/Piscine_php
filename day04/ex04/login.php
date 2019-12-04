<?php
include "auth.php";
session_start();
$login = $_POST['login'];
$passwd = $_POST['passwd'];
echo $login . " Conected ";
if (auth($login, $passwd)) {
    $_SESSION['logged_on_user']['login'] = $login;
    $_SESSION['logged_on_user']['passwd'] = $passwd;
    echo "OK\n";
} else {
    $_SESSION['logged_on_user'] = "";
    exit("ERROR\n");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat 42</title>
</head>
<body>
<a href="logout.php">Disconect</a><br>
<a href="index.html">Return</a>
<iframe src="chat.php" name="chat"  width="100%" height="550px"></iframe>
<iframe src="speak.php" name="speak"  width="100%" height="50px">></iframe>
</body>
</html>
