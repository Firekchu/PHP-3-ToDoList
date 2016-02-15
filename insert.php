<?php
	$connection = new mysqli('localhost','root','','todo');

	$description = $_POST['description'];

	$sql = "insert into things (description) values('$description')";

	$connection->query($sql);

	header('location:todo.php')
?>