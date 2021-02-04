<!DOCTYPE html>
<html>

<head>
	<title>Home page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	include_once('dbclass.php');
	$db = new db;
	session_start();

	if (isset($_SESSION['uid'])) {
		echo '<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f6f6f6;">
		<a class="navbar-brand" href="#"><img src="../assets/ciela.png"
			style="width:150px; height:50px; margin-left: 50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav m-auo ftont-rubik font-size-28"
			style="border-radius: 300px; border-color: #dd2d2a; text-align: center; padding-left: 10px; padding-right: 40px; text-align: center; background-color: #dd2d2a;">
			<li class="nav-item" style="padding-left: 40px;">
			<a class="nav-link" style="color:#ffffff" href="about.php"><span class="btn btn-light">View Profile</span></a>

			</li>
			<li class="nav-item" style="padding-left: 40px;">
			<a class="nav-link" style="color:#ffffff" href="#"><form method="post"><input type="submit" class="btn btn-dark"value="Logout" name="logout"></form></a>
			</li>
		  </ul>
		</div>
	  </nav>';
		if (isset($_POST['logout'])) {
			$db->logOut();
		}
	} else if (isset($_POST["uname"]) & isset($_POST["pwd"])) {

		$res = $db->getUser($_POST["uname"], $_POST["pwd"]);
		$count = mysqli_num_rows($res);
		if ($count > 0) {
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

			$_SESSION['uid'] = $row['user_id'];

			//echo "<script>location.href='home.php'</script>";
			header("location:home.php");
			exit;
		} else {
			echo "<script>alert('username or password incorrect!')</script>";
			echo "<script>location.href='index.php'</script>";
		}
	} else {
		//echo "<script>location.href='index.php'</script>";
		header("location:index.php");
		exit;
	}


	?>
</body>

</html>