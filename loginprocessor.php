<?php
  require_once('connect.php');
  if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $result = $db->query("SELECT username,password FROM user WHERE username = '$username' AND password = '$password'");
    if(!$result){
      die($db->error);
    }else{
      if($result->num_rows == 1){
        session_start();
        header('Location: dashboard.php');
      }else{
        die('Login Failed');
      }
    }
  }
 ?>
