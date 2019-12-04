<?php 
session_start();
if ($_GET['submit'] == 'OK' && $_GET['passwd'] != null && $_GET['login'] != null){
    $_SESSION['passwd'] = $_GET['passwd'];
    $_SESSION['login'] = $_GET['login'];
}
?>

<html><body>
<form action = "index.php" method = "GET">
    Username: <input type = 'text' placeholder = "login" name = "login" value = <?php echo $_SESSION['login'];?> >
    <br />
    Password: <input type = 'text' placeholder = "passwd" name = "passwd" value = <?php echo $_SESSION['passwd'];?> >
    <input type = 'submit' name = "submit" vallue = "OK"/>
</form>
</body></html>
