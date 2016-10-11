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
               <h3>Post your meal</h3>
                <form action="createpostprocessor.php" method="post" enctype="multipart/form-data">
	                 <p>Post name:</p><input type="text" name="content" width="50" height="300" />
					 <div class="input-field col s12">
						<p>Ingredients:</p>
						<textarea id="textarea1" class="materialize-textarea"></textarea>
						<script>
						  $('#textarea1').val('New Text');
						  $('#textarea1').trigger('autoresize');
						</script>
				   	 </div>
				<div class="row">
                   <input type="file" name="image" />
                   <br/>
	                 <a href="#" class="waves-effect waves-light btn red"><input name="submit" type="submit" value="Post" /></a>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
