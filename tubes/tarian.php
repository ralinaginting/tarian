<!DOCTYPE html>
<?php include('koneksi.php'); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>E-TARIAN</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/responsiveslides.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
  	<div class="wrapper">
  		<div class="container">
  			<nav class="navbar navbar-default">
  				<div class="container-fluid"> 
  					<!-- Brand and toggle get grouped for better mobile display -->
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  						<a class="navbar-brand" href="index.html">E-<span>TARIAN</span></a> </div>

  						<!-- Collect the nav links, forms, and other content for toggling -->
  						<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
  							<ul class="nav navbar-nav">
					            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
					            <li ><a href="about_us.php">About Us</a></li>
								<li ><a href="tarian.php">Dancing</a></li>
							</ul>
  						</div>
  						<!-- /.navbar-collapse --> 
  					</div>
  					<!-- /.container-fluid --> 
  				</nav>
  			</div>
  		</div>
  		<div class="inner-head">
  			<div class="container">
  				<div class="col-lg-12">
  					<h4 class="pull-left">dancing</h4>
  					<p class="pull-right pagination"><a href="index.html">home</a><span>></span><a href="">dancing</a></p>
  				</div>
  			</div>
  		</div>
  		<!-- inner-head end -->
  		<div class="inner-page dancing">
        <?php 
            $query = "select * from tarian";
            $result = mysqli_query($connect,$query);
            foreach ($result as $key) {
         ?>
  			<div class="container">
  				<div class="">
  					<div class="col-md-6 no-padding-left">
  						<img src="<?php echo $key['image'] ?>">
  					</div>
  					<div class="col-md-6">
  						<h2><b><?php echo $key['judul'] ?></b></h2>
							<p><?php echo $key['deskripsi'] ?></p>
  					</div>
  					<div class="clearfix"></div>
					<hr>
  				</div>
			
  			</div>
        <?php } ?>
        <!--
        <div class="container">
          <div class="">
            <div class="col-md-6 no-padding-left">
              <img src="<?php echo $key['image'] ?>">
            </div>
            <div class="col-md-6">
              <h2><b>Sumatera</b></h2>
              <p><b><font color="black">Tari Tor Tor merupakan salah satu jenis tari yang berasal dari suku Batak di Pulau Sumatera.
              Sejak sekitar abad ke-13, Tari Tor Tor sudah menjadi budaya suku Batak.
              Perkiraan tersebut dikemukakan oleh mantan anggota anjungan Sumatera Utara 1973-2010 dan pakar Tari Tor Tor.
              Di kawasan Pahae dikenal dengan tarian gembira dan lagu berpantun yang disebut tumba atau juga biasa disebut Pahae do mula ni tumba.<br><br>
              Jenis-jenis tari tor yaitu Tor Tor Pangurason, Tor Tor Sipitu Cawan, Tor Tor Tunggal Panaluan.
              Sekarang ini Tari Tor Tor menjadi sebuah seni budaya bukan lagi menjadi tarian yang lekat hubungannya dengan dunia roh.
              Karena seiring berkembangnya zaman, Tor Tor merupakan perangkat budaya dalam setiap kehidupan adat suku Batak.<br>
              Bagaimanapun juga, Tor Tor Batak adalah identitas seni budaya masyarakat Batak yang harus dilestarikan dan tidak lenyap oleh perkembangan zaman dan peradaban manusia.
              Tari Tor Tor Batak mengandung nilai-nilai etika, moral dan budi pekerti yang perlu ditanamkan kepada generasi muda.<
            
			</div>
			
            <div class="clearfix"></div>
			=================================================================================================================================================
          </div>
      
        </div>
			 <div class="container">
  				<div class="">
  					<div class="col-md-6 no-padding-left">
  						<img src="img/tari_kipas_pakarena.jpg">
  					</div>
  					<div class="col-md-6">
  						<h2><b>Sulawesi</b></h2>
							<p><b><font color="black">Menurut sejarahnya, Tari Kipas Pakarena ini merupakan salah satu tarian peninggalan Kerajaan Gowa di daerah Gowa, Sulawesi Selatan. 
							Kerajaan Gowa ini dulunya pernah berjaya di sulawesi bagian selatan sampai berabad-abad. Namun menurut mitos masyarakat disana,
							tarian ini berawal dari kisah perpisahan antara penghuni boting langi (khayangan) dan pengguni lino (bumi) pada zaman dahulu.<br><br>
							Konon sebelum mereka berpisah, penghuni boting langi sempat mengajarkan bagaimana menjalani hidup
							seperti bercocok tanam, beternak, dan berburu pada penghuni lino. Ajaran tersebut mereka berikan melalui gerakan-gerakan badan dan kaki.
							Gerakan tersebut kemudian dipakai penghuni lino sebagai ritual adat mereka.<br>
							Tari Kipas Pakarena adalah salah satu tarian tradisional yang berasal dari daerah Gowa, Sulawesi Selatan.
							Tarian ini dibawakan oleh para penari wanita dengan berbusana adat dan menari dengan gerakannya yang khas serta memainkan kipas sebagai atribut menarinya.<br>
							Link: "https://www.youtube.com/watch?v=9svirKNGMDM" </font></b></p><br><br>
  					</div>
  					<div class="clearfix"></div>
					=================================================================================================================================================
  				</div>
  			</div>
			<div class="container">
  				<div class="">
  					<div class="col-md-6 no-padding-left">
  						<img src="img/tarimonong.jpg">
  					</div>
  					<div class="col-md-6">
  						<h2><b>Kalimantan</b></h2>
							<p><b><font color="black">Tari Monong adalah salah satu tarian tradisional suku Dayak di Kalimantan barat.
							Tari Monong adalah salah satu tarian tradisional suku Dayak di Kalimantan barat.
							Tarian ini merupakan tarian penyembuhan atau tarian penolak penyakit yang di lakukan saat warganya terkena penyakit.<br><br>
							Tarian Monong awalnya merupakan tarian penyembuhan yang di lakukan oleh para dukun suku Dayak dengan membacakan mantra sambil menari.
							Dalam tarian ini juga di ikuti oleh anggota keluarga dari yang sakit dan di pimpin oleh seorang dukun.
							Tarian Monong merupakan ritual yang di lakukan untuk memohon penyembuhan kepada Tuhan agar warga yang sakit di berikan kesembuhan.<br>
							Namun seiring dengan perkembangan jaman, tarian ini tidak hanya di gunakan sebagai tarian penyembuhan saja,
							Namun juga sebagai sarana hiburan sebagai pelestarian kesenian tradisional suku Dayak.
							Kreasi tersebut di lakukan untuk melestarikan kesenian tradisional suku Dayak di Kalimantan barat,
							selain itu juga agar pertunjukan terlihat menarik, namun tetap tidak menghilangkan nilai - nilai di dalamnya.<br>
							Link: "https://www.youtube.com/watch?v=NreCIy6TU_0" </font></b></p><br><br>
  					</div>
  					<div class="clearfix"></div>
					=================================================================================================================================================
  				</div>
  			</div>
			<div class="container">
  				<div class="">
  					<div class="col-md-6 no-padding-left">
  						<img src="img/tari_legong.jpg">
  					</div>
  					<div class="col-md-6">
  						<h2><b>Bali</b></h2>
							<p><b><font color="black">Tari Legong dahulu dikembangkan di keraton-keraton Bali pada abad ke-19 paruh kedua.
							Idenya diawali dari seorang pangeran dari Sukawati yang sedang sakit keras bermimpi melihat dua gadis menari dengan lemah gemulai 
							diiringi oleh gamelan yang indah. Ketika sang pangeran pulih dari sakitnya, mimpinya itu dituangkan dalam repertoar tarian dengan gamelan lengkap.<br><br>
							Sesuai dengan sejarahnya, para penari legong yang baku adalah dua orang gadis yang belum mendapat menstruasi,
							ditarikan di bawah sinar bulan purnama di halaman keraton. Kedua penari ini,disebut legong dan selalu dilengkapi dengan kipas sebagai alat bantu.<br>
							disebut legong dan selalu dilengkapi dengan kipas sebagai alat bantu.
							Struktur tarinya pada umumnya terdiri dari papeson, pangawak, pengecet, dan pakaad.
							Arti kata Legong berasal dari kata "leg" artinya gerakan tari yang luwes (lentur)
							dan kata "gong" memiliki arti alat musik gamelan. Sehingga kata "Legong" memiliki arti gerak tari
							yang terikat (terutama aksentuasinya) oleh alat musik gamelan yang mengiringinya.<br>
							Link: "https://www.youtube.com/watch?v=w4n6uQbFKeE" </font></b></p><br><br>
  					</div>
  					<div class="clearfix"></div>
					=================================================================================================================================================
  				</div>
  			</div>
			<div class="container">
  				<div class="">
  					<div class="col-md-6 no-padding-left">
  						<img src="img/tari_selamatdatang.jpg">
  					</div>
  					<div class="col-md-6">
  						<h2><b>Papua</b></h2>
							<p><b><font color="black">Menurut sejarahnya, Tari Selamat Datang sudah ada sejak zaman dahulu.
							Di Papua sendiri pada dasarnya memiliki banyak suku dan setiap suku biasanya memiliki ciri khas tersendiri dalam tarian selamat datang mereka.
							Tari Selamat Datang sejak dulu sering dilakukan oleh masyarakat di sana untuk menyambut kedatangan para tamu, baik dari luar kota, luar suku,
							maupun tamu penting lainnya yang dianggap terhormat atau berniat baik dalam kedatangan mereka.<br><br>
							Tari Selamat Datang juga merupakan simbol penghormatan dan tanda bahwa tamu tersebut itu diterima dengan baik oleh masyarakat di sana.<br>
							Tari Selamat Datang telah menjadi suatu tradisi dikalangan masyarakat Papua, sehingga masih terus dilestarikan dan dikembangkan oleh masyarakat di sana.
							Karena kecintaan mereka pada budaya Papua, para seniman disana kemudian mengambangkan tarian ini.
							Dengan membawa unsur budaya Papua yang beragam dan ciri khas masyarakat Papua dalamnya, 
							maka jadilah Tari Selamat Datang yang sering ditampilkan saat ini.
							Walaupun begitu beberapa suku di Papua masih tetap mempertahankan tarian selamat datang yang menjadi ciri khas mereka dulu.<br>
							Link: "https://www.youtube.com/watch?v=SHrPjUC5Xuo" </font></b></p><br><br>
  					</div>
  					<div class="clearfix"></div>
					=================================================================================================================================================
  				</div>
  			</div>
  		</div> -->


  		<div class="footer">
  			<div class="container">
  				<div class="col-sm-2">
  					<h5>Site Map</h5>
  					<ul>
  						<li><a href="">Home</a></li>
  						<li><a href="">About Us</a></li>
						<li><a href="">Dancing</a></i>			
  					</ul>
  				</div>
  					
  				</div>
  			</div>
  			<div class="copyright">
  				<div class="container">
  					<p>Copyright &copy; UIBrush.com</p>
  				</div>
  			</div>
  			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  			<script src="js/jquery.min.js"></script> 
  			<!-- Include all compiled plugins (below), or include individual files as needed --> 
  			<script src="js/bootstrap.js"></script> 
  			<script src="js/responsiveslides.min.js"></script> 
  			<script src="js/response.min.js"></script> 
  			<script>
  				$('.collapse').on('shown.bs.collapse', function(){
  					$(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
  				}).on('hidden.bs.collapse', function(){
  					$(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
  				});
  			</script>
  			<script>

  			</script>
  		</body>
  		</html>