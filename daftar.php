<?php include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SILAHKAN LOGIN</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SILAHKAN DAFTAR </strong><h1></h1>
                            <div class="description">
                            	<p>
	                            	 <a href="http://azmind.com"><strong></strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                            		<p>Isi Data</p>
                        		</div>
                            </div>
                            <div class="form-bottom">
							 <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="f">Nama Lengkap</label>
			                        	<input type="text" name="nama" placeholder="Nama Lengkap..." class=" form-control" id="" required>
			                        </div>
									 <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Alamat Lengkap</label>
			                        	<textarea type="text" name="alamat" placeholder="Alamat Lengkap..." class="form-control" id="" required></textarea>
			                        </div>
									 <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">No. Hp</label>
			                        	<input type="text" name="hp" placeholder="No.Hp..." class=" form-control" id="" required>
			                        </div>
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="input-text form-control" id="form-password"  required>
			                        </div>
																		
			                        <button type="submit" class="btn" name="daftar">DAFTAR</button>
			                    </form>
						
							<?php 
						
								if (isset($_POST['daftar'])){
									include 'koneksi.php';
									$nama = $_POST['nama'];
									$alamat = $_POST['alamat'];
									$hp = $_POST['hp'];
									$username = $_POST['username'];
									$pass = $_POST['password'];
									
									
									 $koneksi->query("INSERT INTO user (nama, alamat, no_hp, username, password) VALUES ('$nama', '$alamat', '$hp', '$username', '$pass')");
									 echo "<div class='alert alert-success text-center'> Berrhasil daftar </div>";
									 echo "<meta http-equiv='refresh' content='1;url=index.php'>";
									}
								
									 ?>
							

		                    </div>
                        </div>
                    </div>
              

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>


</html>