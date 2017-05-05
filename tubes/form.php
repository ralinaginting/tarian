<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Masuk / Registrasi </title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrasi</a></li>
        <li class="tab"><a href="#login">Masuk</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Registrasi</h1>
			
          <form action="konfirmasi.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nama <span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Username <span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password <span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/> Registrasi </button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Selamat Datang</h1>
          
          <form action="proses.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username" name="username"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
                             
          <button class="button button-block"/> Masuk </button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
