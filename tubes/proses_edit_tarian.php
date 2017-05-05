<?php 
	include('koneksi.php');
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$desc = $_POST['deskripsi'];

		$query = "UPDATE tarian SET judul='$judul',deskripsi='$desc' WHERE id_tarian=$id";
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
	}
 ?>