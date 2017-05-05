<head>
	<title>Edit Tarian</title>
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
			<div class="text-center">
				<h2>Edit Tarian</h2>
			</div>
			<?php 
				include('koneksi.php');
				$id = $_GET['id'];
				$query = "select * from tarian where id_tarian=$id";
				$result = mysqli_query($connect,$query);
				$data = mysqli_fetch_array($result);
			 ?>
			<form class="form form-horizontal" action="proses_edit_tarian.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $data['id_tarian'] ?>">
				<div class="form-group">
					<div class="col-md-2">
						<label>Nama Tarian</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="judul" value="<?php echo $data['judul'] ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label>Deskripsi</label>
					</div>
					<div class="col-md-9">
						<textarea name="deskripsi" class="form-control" ><?php echo $data['deskripsi'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
					</div>
					<div class="col-md-9">
						<input type="submit" name="submit" value="Save" class="btn btn-success">
					</div>
				</div>
			</form>
			<hr>
			<div class="text-center col-md-12"><h2>Edit Gambar</h2></div>

			<form class="form form-horizontal" action="proses_edit_gambar.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $data['id_tarian'] ?>">
				<div class="form-group">
					<div class="col-md-2">
						<label>Gambar</label>
					</div>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
					</div>
					<div class="col-md-9">
						<input type="submit" name="submit" value="Save" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>