<!DOCTYPE html>
<html>

<head>
	<title>Log in page</title>
	<link rel="stylesheet" href="style.css">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="max-width: 1000px; margin: auto;">
	<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		header("location:home.php");
		exit;
	}
	?>
	<div id="wrap">
		<form action="home.php" method="post" style="display: inline-block; text-align: center; margin: 0 auto;">
			<table>
				<tr>
					<th colspan="2">
						<h2>Login</h2>
					</th>
				</tr>
				<tr>
					<td>
						<input type="text" name="uname">
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="pwd">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="btn btn-primary"name="login" value="Login" style="width: 200px; margin: auto;">
					</td>
				</tr>
				<tr>
					<td>
						<a href="register.php"><span class="btn btn-success">Create an account</span></a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>