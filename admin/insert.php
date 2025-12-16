<?php include 'config.php';
if(isset($_POST['btn-insert'])){
	$firstname 		= $_POST['firstname'];
	$sql = "insert into `test` (`firstname`) values ('$firstname')";
	$sqlr = mysqli_query($con, $sql);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<div>
	<form method="post">
		<input type="text" name="firstname"><br>
		<input type="submit" name="btn-insert">
	</form>
<br>
<br>
<br>
	<table border="1">
		<thead>
			<tr>
				<th>sr#</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sqls = "select * from `test`";
				$sqlsr = mysqli_query($con, $sqls);
				while($row = mysqli_fetch_array($sqlsr)){
			 ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table> 
</div>
</body>
</html>