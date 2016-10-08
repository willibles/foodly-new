<!DOCTYPE html>
<?php
 include('header.php');
?>
<html>
	<head>
		<title>Food.ly Signup</title>
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Lobster" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
  <style>
    body{
      font-family: 'Roboto';
    }
    a{font-family: 'Lobster'}
  </style>
	<body>
		<div class="navbar-fixed">
			<nav>
    			<div class="nav-wrapper red accent-3">
					<a href="#!" class="brand-logo center">Food.ly</a>
    			</div>
  			</nav>
		</div>
		<div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content">
			          <form action="signupprocessor.php" method="post">
					            Name: <input type="text" name="myname">
					            <br>
					            Username: <input type="text" name="uname">
	                    <br>
					            Password: <input type="password" name="pword">
					            <br>
					            Bio: <textarea name="bio" rows="8" cols="40" style="min-height:300px;"></textarea>
					            <br>
					            <a class="waves-effect waves-light btn red accent-3"><button style="background:transparent; border:none; outline:none;" type="submit" name="submit">SIGN UP</button></a>
			          </form>
		</div>
  </body>
</html>
