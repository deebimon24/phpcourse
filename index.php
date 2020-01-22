<?php
	
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'php_course';
	
	$conn = new mysqli($servername, $username, $password , $database);
	
	if($conn->connect_error){
		die("Connection failed+".$conn->connect_error);
		}

		echo "connected successfully";
		
	$table = "todos";
	$sql = "SELECT * FROM $table";
	$result = $conn->query($sql);

?>
<html>
<head>
</head>
<body>
</body>
	<h1>To Dos</h1>
	<table border="1">
		<tr>
			<td>id</td>
			<td>title</td>
			<td>due_date</td>
			<td>created_at</td>
		</tr>
		
			<?php>
				if($result->num_roots > 0){
					$rowNum = 1;
					while($row = $result->$fetch_assoc()){
			?>
				<tr>
					<td><?php echo $rowNum; ?></td>
					<td><?php echo $row["title"]; ?></td>
					<td><?php echo $row["dute_date"]; ?></td>
					<td><?php echo $row["created_at"]; ?></td>
				</tr>		
			<?php
					$rowNum++;
			?>
			

	</table>
</html>