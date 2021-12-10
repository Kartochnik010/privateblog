<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  // $password = md5($password."ASSBLEED");

  $mysql = new mysqli('localhost', 'root', 'root', 'blog');

  $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
  $user = $result -> fetch_assoc();


if(empty($user) or count($user) == 0){
    echo "Incorrect login or password";
    exit();
  }

setcookie('user', $user['name'], time() + 3600, "/");
$_COOKIE['user'];

  // print_r($user);
  // exit();

  $mysql -> close();

  header('Location: cabinet.php');
?>
