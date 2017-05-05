<?php
include('koneksi.php');
session_start();

if (isset($_POST['username'])){
	$username = $_POST ["username"];
	$password = md5($_POST ["password"]);
	$query = "select * from users where username='$username' AND password ='$password'";
	echo $query;
	$result = mysqli_query($connect,$query);
	$ct = count(mysqli_fetch_array($result));
	echo $ct;
	if($ct > 0)

	{
		$_SESSION ["username"]=$username;
		header('location:tarian_view.php');
	}else{
		header('location:form.php');
	}
}
?>