<?php
include('koneksi.php');

	$judul = $_POST['judul'];
	$desc = $_POST['deskripsi'];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["image"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}

	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "<script>window.alert('maaf, hanya JPG, JPEG, PNG & GIF file yang di terima.')</script>";
	    $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "<script>window.alert('Maaf, gagal upload.');</script>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
	        $query = "INSERT INTO tarian (judul,deskripsi,image) VALUES ('$judul','$desc','$target_file')";
	        $result = mysqli_query($connect,$query);
	         if($result){
	            echo "<script>window.alert('Data Berhasil disimpan');</script>";
	            header('Location:form_tarian.php');
	        }
	        else{
	            echo "<script>window.alert('Data Gagal disimpan');</script>";
	            header('Location:form_tarian.php');
	        }
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

?>