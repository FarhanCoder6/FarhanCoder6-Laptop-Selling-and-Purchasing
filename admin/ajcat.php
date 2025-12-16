<?php 
include 'config.php';
if(isset($_POST['des_id'])){
	$id = $_POST['des_id'];
	$sl = "select * from `category` where `designer` = '$id'";
	$sr = mysqli_query($con, $sl);
	while($rx = mysqli_fetch_array($sr)){
		?>
		<option value="<?php echo $rx['id']; ?>"><?php echo $rx['category']; ?></option>
		<?php
	}
}

 ?>