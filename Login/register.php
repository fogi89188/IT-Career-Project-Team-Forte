<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game name</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div id="wrap">
        <a href="index.php"><button class="btn btn-warning" style=" margin-left: -150px; position:absolute;">Back to login</button></a>
        <form action="register_form.php" method="POST" id="form" style="display: inline-block; text-align: center; margin: 0 auto;">
            <br>
            <input type="text" name="u_name" required placeholder="Username">
            <br>
            <br>
            <input type="text" name="name" required placeholder="Name">
            <br>
            <br>
            <input type="text" name="pass" required placeholder="Password">
            <br>
            <br>
            <input type="text" name="phone" required placeholder="Phone number">
            <br>
            <br>
            <input type="text" name="email" required rows="5" placeholder="Email">
            <br>
            <br>
            <input type="submit" class="btn btn-danger font-size-18" value="Register" style="width: 150px;">
        </form>
    </div>
</body>

</html>