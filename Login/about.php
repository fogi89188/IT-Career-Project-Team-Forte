<!DOCTYPE html>
<html>

<head>
	<title>About page</title>
</head>

<body>
	<?php
	session_start();

	if (isset($_SESSION['uid'])) {
		include_once('dbclass.php');
		$db = new db;
		
		$res = $db->getUserData();
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
	} else {
		header("location:index.php");
		exit;
	}
	$db = mysqli_connect("localhost", "root", "", "mydb");
	if (isset($_POST['upload'])) {
		$image = $_FILES['image']['name'];
		$target = "images/" . basename($image);
		$id= $_SESSION['uid'];
		$sql = "INSERT INTO images (image, user_id) VALUES ('$image', '$id')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			echo'<script>alert("Upload successful");</script>';
		} else {
			echo'<script>alert("Failed to upload");</script>';
		}
	}
	?>
	<table style="text-align:center;border:2">
		<tr>
			<th colspan=2>User Details</th>
		</tr>
		<tr>
			<td>Name:</td>
			<td><?php echo $row['name']; ?></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $row['email']; ?></td>
		</tr>
	</table>
	<form method="POST" action="about.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<button type="submit" name="upload">Качване</button>
		</div>
	</form>
</body>

</html>