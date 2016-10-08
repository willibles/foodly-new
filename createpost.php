<?php
include('header.php');
 ?>
<form action="createpostprocessor.php" method="post" enctype="multipart/form-data">
	<input type="file" name="image" >
	<input type="text" name="content" width="50" height="300">
	<input name="submit" type="submit" value="Post">
</form>
