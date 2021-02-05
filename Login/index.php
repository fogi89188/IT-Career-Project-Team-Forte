<!DOCTYPE html>
<html style="height: 100%;">

<head>
	<title>Tanks of Gramble</title>
	<link rel="stylesheet" href="style.css">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<div class="bg">

	<body style="margin: auto; height: 100%;">
		<?php
		session_start();
		if (isset($_SESSION['uid'])) {
			header("location:home.php");
			exit;
		}
		?>
		<div id="wrap">
			<form action="home.php" method="post" style="display: inline-block; text-align: center;  margin-top: 32%; position:absolute;">
				<table>
					<tr>
						<th colspan="2">
							<h2>Влизане</h2>
						</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="uname" style="width: 250px;" placeholder="Потребителско име">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="pwd" style="width: 250px;" placeholder="Парола">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" class="btn btn-primary" name="login" value="Вход" style="width: 200px; margin: auto;">
						</td>
					</tr>
					<tr>
						<td>
							<a href="register.php"><span class="btn btn-success">Създаване на нов профил</span></a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</div>

</html>