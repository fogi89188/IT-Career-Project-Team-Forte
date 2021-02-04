<?php
$u_name = $_POST['u_name'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if (!empty($name) || !empty($email) || !empty($password)) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";
    //create connection
    $conn = new mysqli($host, $user, $password, $database);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } 
    $sql = "SELECT * FROM user WHERE (u_name='$u_name');";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {

            $row = mysqli_fetch_assoc($res);
            if ($u_name == isset($row['u_name'])) {
                echo "<script>alert('Username is taken')</script>";
            }
            echo '<script type="text/javascript">', 'location.href="register.php"', '</script>';
        }
    else {
        $SELECT = "SELECT email From user Where email = !? Limit 1";
        $INSERT = "INSERT INTO user (u_name, pass, name, phone, email) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
    }
    if ($rnum == 0) {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param('sssss', $u_name, $pass, $name, $phone, $email);
        $stmt->execute();
    }
    $stmt->close();
    $conn->close();

    echo "<script>alert('Account created successfully')</script>";
    echo '<script type="text/javascript">', 'location.href="index.php"', '</script>';
} else {
    echo "All field are required";
    die();
}
