<!DOCTYPE html>
<html>

<head>
	<title>Tanks of Gramble</title>
	<link rel="stylesheet" href="libs/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<div class="bg-home">

	<body>
		<?php
		include_once('dbclass.php');
		$db = new db;
		session_start();
		$get_img = "";
		if (isset($_SESSION['uid'])) {
			echo '<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f6f6f6;">
		<a class="navbar-brand" href="#"><img src="../Login/assets/logo.png"
			style="width:300px; height:100px; margin-left: 50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav m-auo ftont-rubik font-size-28"
			style="border-radius: 300px; border-color: #dd2d2a; text-align: center; padding-left: 10px; padding-right: 40px; text-align: center; background-color: #dd2d2a;">
			<li class="nav-item" style="padding-left: 40px;">
			<a class="nav-link" style="color:#ffffff" href="about.php"><span class="btn btn-light">Виж профил</span></a>

			</li>
			<li class="nav-item" style="padding-left: 40px;">
			<a class="nav-link" style="color:#ffffff" href="#"><form method="post"><input type="submit" class="btn btn-dark"value="Изход" name="logout"></form></a>
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
		<!-- <img src="//<?php// echo "images/" + $result ?>" style="width: 200px; position:absolute;"> -->
		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT u_name FROM user WHERE user_id = " . $_SESSION['uid'] . "";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			if ($row = $result->fetch_assoc()) {
				//echo $row["u_name"];
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>
		<video autoplay muted loop style="width: 100%; position: absolute;">
			<source src="assets/tanks.mp4" type="video/mp4">
		</video>
		<a href="files/TanksOfGramble.exe">
			<img src="assets/igrai.png" alt="download_button" style="position:absolute; width:300px; margin-left: 42%; margin-top: 310px;">
		</a>
		<section>
			<img src="assets/Ciklamenno.png" alt="pink_section" style="position:absolute; width:100%; margin-top: 33%;">
			<h1 style="margin-left: 22%; margin-top: 63%; color: #ff23c9; font-size: 40px; position:absolute; background-color: #19123b;">Добре дошъл,</h1>
			<h1 style="margin-left: 27%; margin-top: 66%;color: #ff23c9; font-size: 50px; position:absolute;background-color: #19123b;"><?php echo $row["u_name"]; ?></h1>
			<a href="files/TanksOfGramble.exe">
				<img src="assets/iztegli.png" alt="download_button" style="position:absolute; width:300px; margin-left: 21%; margin-top: 70%;">
			</a>
		</section>
		<section>
			<img src="assets/banner_section.jpg" alt="section" style="position:absolute; width:100%; margin-top: 77%;">
			<div style="position: absolute; width:100%; margin-top: 130%;">
				<a class="popup-gallery" href="assets/specs/TankSpecificsB1.png" target="_blank">
					<img src="assets/tanks/b1t.png" alt="tank_b1" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 25%;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsB2.png" target="_blank">
					<img src="assets/tanks/b2t.png" alt="tank_b2" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsB3.png" target="_blank">
					<img src="assets/tanks/b3t.png" alt="tank_b3" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsH1.png" target="_blank">
					<img src="assets/tanks/h1t.png" alt="tank_h1" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsH2.png" target="_blank">
					<img src="assets/tanks/h2t.png" alt="tank_h2" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsT.png" target="_blank">
					<img src="assets/tanks/tt.png" alt="tank_t" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
			</div>
			<div style="position: absolute; width:100%; margin-top: 140%;">
				<a class="popup-gallery" href="assets/specs/TankSpecificsМ1.png" target="_blank">
					<img src="assets/tanks/m1t.png" alt="tank_m1" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 25%;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsМ2.png" target="_blank">
					<img src="assets/tanks/m2t.png" alt="tank_m2" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsМ3.png" target="_blank">
					<img src="assets/tanks/m3t.png" alt="tank_m3" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsT1.png" target="_blank">
					<img src="assets/tanks/t1t.png" alt="tank_t1" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsT2.png" target="_blank">
					<img src="assets/tanks/t2t.png" alt="tank_t2" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
				<a class="popup-gallery" href="assets/specs/TankSpecificsT3.png" target="_blank">
					<img src="assets/tanks/t3t.png" alt="tank_t3" class="tank" style="position:relative; width: 150px; height: 150px; margin-left: 5px;">
				</a>
			</div>
			<a href="files/TanksOfGramble.exe">
				<img src="assets/izberi.png" alt="download_button" style="position:absolute; width:700px; height:250px; margin-left: 30%; margin-top: 200%;">
			</a>
		</section>
	</body>
</div>
<script src="libs/magnific-popup/jquery.magnific-popup.min.js "></script>

</html>