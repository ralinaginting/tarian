<!DOCTYPE html>
<?php 
	include('koneksi.php');
 ?>
<html>
<head>
	<title>View Tarian</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="tarian_view.php">Lihat Tarian</a></li>
			 <li role="presentation"><a href="form.php">Logout</a></li>
		</ul>
		<div id="content">
			<div class="col-md-12 text-center">
				<h2 >Daftar Tarian</h2>
			</div>
			<div>
				<a href="form_tarian.php" class="btn btn-primary">Input Tarian</a>
			</div>
			<table class="table table-hover table-border">
				<thead>
					<td>ID</td>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php 
						$query = "SELECT * FROM tarian";
						$result = mysqli_query($connect,$query);
						//$data = mysqli_fetch_array($result);
						foreach ($result as $key) {
					 ?>
					<tr>
						<td><?php echo $key['id_tarian'] ?></td>
						<td><?php echo $key['judul'] ?></td>
						<td><?php echo $key['deskripsi'] ?></td>
						<td><a href="edit_tarian.php?id=<?php echo $key['id_tarian'] ?>"  >Edit</a> | <a href="hapus_tarian.php?id=<?php echo $key['id_tarian'] ?>">hapus</a> </td>
					</tr>
					<?php 
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>