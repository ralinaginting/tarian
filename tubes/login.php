<?php
		if (isset ($_POST['login'])) {
			$username = $_POST['user'];
			$password = ($_POST['pass']);
			
			if($username=="6706154147" and $password=="12345"){
				header("location:index.html");
				
			}else {
				echo "gagal input";
			}
		}
			
?>
	<form method="post" action="">
	ID User: <input type="text" name="user"/>
	Password: <input type="password" name="pass"/>
	<input type="submit" name="login"/>	
	</form> 