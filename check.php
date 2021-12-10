<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 ||  mb_strlen($login) > 90) {
    echo "Your Login is too long/short. (From 5 to 90 characters)";
    exit();
  }else if (mb_strlen($name) < 3 ||  mb_strlen($login) > 50) {
    echo "Your name is too long/short. (From 3 to 50 characters)";
    exit();
  }else if (mb_strlen($password) < 6 ||  mb_strlen($password) > 16) {
    echo "Your password is too long/short. (From 6 to 16 characters)";
    exit();
  }

  // $password = md5($password."ASSBLEED");

  $mysql = new mysqli('localhost', 'root', 'root', 'blog');

  $mysql -> query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

  $mysql -> close();

  header('Location: cabinet.php');
?>
