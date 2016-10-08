<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $db->query("SELECT username,password FROM users WHERE username = '$username' AND password = '$password'");
    if(!$result){
      die($db->error);
    }else{
      setcookie('loggedin','1',time()+604800);
      header('Location: dashboard.php');
    }
  }
 ?>
