<?php 

	$con = mysqli_connect("127.0.0.1", "root", "root", "project");

	mysqli_query($con, "INSERT INTO site (title, descr, img, price) VALUES ('".$_GET['title']."', '".$_GET['descr']."','".$_GET['img']."', '".$_GET['price']."')");

	header('Location: http://20urok/index.php');

	
 ?>