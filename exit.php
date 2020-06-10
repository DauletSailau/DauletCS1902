<?php
session_start();
unset($_COOKIE['username']);
unset($_COOKIE['password']);
setcookie('username','',-1);
setcookie('password','',-1);
 session_unset();
 
 echo $_SESSION['unsern'];

$url='registerform.php';
header('Location:'. $url);
?>