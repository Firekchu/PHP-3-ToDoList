<?php

	$connection = new mysqli('localhost','root','','todo');
	echo $connection->connect_error;

	$number = $_GET['id'];
	echo $number;

	$sql = "DELETE FROM `things` WHERE  `id`=$number";

	echo $sql;

	$connection->query($sql);

	header('location:todo.php');
?>