<?php
class db{
	public $conn;
	function __construct(){

		$this->conn=mysqli_connect("localhost","root","");
		if(mysqli_connect_errno()){
			echo "failed to connect";
			mysqli_connect_error();
			exit();
		}
		mysqli_select_db($this->conn,"mydb");

	}
	public function getUser($uname,$pwd){

		
		$sql="SELECT user_id,u_name, pass from user where u_name='$uname' and pass='$pwd' LIMIT 1";
		$result=mysqli_query($this->conn,$sql); 
		return $result;
	}
	public function getUserData(){
		//session_start();
		$sql="SELECT name,phone,email from user where user_id = ".$_SESSION['uid']."";
		$result=mysqli_query($this->conn,$sql); 
		return $result;
	}
	public function logOut(){
		
		unset($_SESSION["uid"]);
		//echo "<script>location.href='index.php'</script>";
		header("location:index.php");
		exit;
	}
	public function getUsername($uname){
	$sql = "SELECT u_name from user where u_name='$uname' and user_id = " . $_SESSION['uid'] . "";
	$u_name = mysqli_query($this->conn, $sql);
	return $u_name;
	}
	function __destruct(){
		mysqli_close($this->conn);
	}
}
