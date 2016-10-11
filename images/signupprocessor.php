<?php
include('header.php');
if(isset($_POST['submit'])){
  $username = $_POST['uname'];
  $password = $_POST['pword'];
  $bio = $_POST['bio'];
  $name = $_POST['myname'];
  $result = $db->query("INSERT INTO user (`username`,`password`,`bio`,`name`) VALUES('$username','$password','$bio','$name')");
}

 ?>
