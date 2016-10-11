<?php
require_once('connect.php');
if(isset($_FILES['image'])){
	$content = $_POST['content'];
	$image = $_FILES['image'];
	$image['name'] = uniqid().".jpg";
	$target = "./images/".$image['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
	if($result = $db->query("INSERT INTO posts (`text`,`image`) VALUES('$content','$image[name]')")){
		header('Location: dashboard.php');
	}
}
?>