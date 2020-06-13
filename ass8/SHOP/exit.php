<?php
unset($_COOKIE['username']);
unset($_COOKIE['email']);
setcookie('username','',-1,'/');
setcookie('email','',-1,'/');
$url='services.php';
header('Location:'. $url);
?>