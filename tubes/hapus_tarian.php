<?php 
include('koneksi.php');
	$id = $_GET['id'];
	$query = "DELETE FROM tarian WHERE id_tarian = $id ";
	echo $query;
	$result = mysqli_query($connect,$query);
	if($result){
		echo "<script>window.alert('Data Berhasil diedit');</script>";
		header('Location:tarian_view.php');
	}
	else{
		echo "<script>window.alert('Data Gagal diedit');</script>";
		header('Location:tarian_view.php');
	}
 ?>