<!DOCTYPE html>


	<head>
		<title>To-Do List</title>
		<link href="todo.css" rel="stylesheet" type="style/css">
	</head>


	<body>
		<div id="container">
			<div id="header">
				<h1>To-do list</h1>
			</div>


			<div id="content">
				<?php

					$connection = new mysqli('localhost','root','','todo');
					echo $connection->connect_error;

					$sql = "select * from things";

					$result = $connection->query($sql);

					$things = $result->fetch_all(MYSQLI_ASSOC);

					//var_dump($things);
				?>

				<table>
					<tr id="top">
						<td>Description:</td>
						<td>Remove:</td>
					<tr>
					<?php
						foreach($things as $thing):


						$id = $thing['id']
					?>
						<tr id="<?php echo $thing['id']; ?>">
							<td class="description"><?php echo $thing['description']; ?></td>
							<td id="delete">
								<a href="delete.php?id=<?php echo $id; ?>">X</a>
							</td>
						</tr>
					<?php 
						endforeach;
					?>
				</table>
				<form action="insert.php" method="post">
					<label>Description:</label>
					<input id="description" maxlength="50" name="description" placeholder="ex: Do OVER 9000!!! Push-Ups">

					<input id="add" type="submit" name="submit" value="add">
				</form>				
			</div>
		</div>
	</body>


</html>