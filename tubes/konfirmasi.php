<?php

include('koneksi.php');

    if(isset($_POST['name'])){

        $nama   	= $_POST['name'];
        $username 	= $_POST['username'];
        $email 		= $_POST['email'];
    	$password 	= md5($_POST['password']);

        $query = "INSERT INTO users (nama, username, email, password) VALUES ('$nama','$username','$email','$password')";	
        $result = mysqli_query($connect,$query);	
        if($result){
            echo "<script>window.alert('Registrasi Berhasil')</script>";
            header('Location:form.php');
        }
        else{
            echo "<script>window.alert('Registrasi Gagal')</script>";
            header('Location:form.php');
        }

    }


?>