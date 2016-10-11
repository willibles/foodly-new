<?php
include('header.php');
?>
<html>
	<head>
		<title>Food.ly</title>
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Lobster" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
  <style>
    body{
      font-family: 'Roboto';
	  background:#ddd;
    }
    a{font-family: 'Lobster'}
  </style>
	<body>
		<div class="navbar-fixed">
			<nav>
    			<div class="nav-wrapper red accent-3">
					<a href="dashboard.php" class="brand-logo center">Food.ly</a>
    			</div>
  			</nav>
		</div>
		<div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content" style="margin-top:25vh;">
                <form action="loginprocessor.php" method="post">
                  Username: <input type="text" name="uname">
                  Password: <input type="password" name="pword">
                  <a href="#" class="waves-effect waves-light btn red"><button style="background:transparent; outline:none; border:none" type="submit" name="submit">Log In</button></a>
                </form>
              </body>
</html>
