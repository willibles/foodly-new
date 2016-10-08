<!DOCTYPE html>
<?php
 include('header.php');
?>
<html>
	<head>
		<title>SplitChef</title>
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Roboto" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
  <style>
    body{
      font-family: 'Roboto';
    }
  </style>
	<body>
		<div class="navbar-fixed">
			<nav>
    			<div class="nav-wrapper light-blue accent-3">
					<a href="#!" class="brand-logo center">SplitChef</a>
    			</div>
  			</nav>
		</div>
		<div class="container">
			<form action="signupprocessor.php" method="post">
				<center>
					Name: <input type="text" name="myname">
					<br>
					Username: <input type="text" name="uname">
					<br>
					Password: <input type="password" name="pword">
					<br>
					Bio: <textarea name="bio" rows="8" cols="40"></textarea>
					<br>
					<button type="submit" name="submit">Sign Up!</button>
				</center>
			</form>
		</div>
  </body>
</html>
