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
                            <h1><strong>SILAHKAN LOGIN </strong><h1></h1>
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
                            		<p> Masukkan Username dan Passwordnya!!</p>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn" name="masuk">MASUK</button>
									<br><p>Belum Punya Akun? <strong><a href='daftar.php'>Daftar disini</a></strong></p>
			                    </form>
							
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

<?php
if (isset($_POST['masuk'])){
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cocok = $ambil->num_rows;
    if($cocok > 0){
        $data = $ambil->fetch_assoc();

        if($data['sebagai'] == "admin"){
            $_SESSION['username'] ="username";
            $_SESSION['sebagai'] = "admin";
            echo " <div class='col-md-6 col-md-offset-3 mx-auto'>";
            echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
            echo "<meta http-equiv='refresh' content='1;url= admin/menu.php'>";
            echo "</div>";
        }else if ($data['sebagai']== "pelanggan"){
            $_SESSION['username'] ="username";
            $_SESSION['sebagai'] = "pelanggan";
            echo "<div class='col-md-6 col-md-offset-3 mx-auto'>";
            echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
            echo "<meta http-equiv='refresh' content='1;url=pelanggan/menu.php'>";
            echo "</div>";

        }else if ($data['sebagai']== "kurir"){
            $_SESSION['username'] ="username";
            $_SESSION['sebagai'] = "kurir";
            echo "<div class='col-md-6 col-md-offset-3 mx-auto'>";
            echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
            echo "<meta http-equiv='refresh' content='1;url= kurir/menu.php'>";
            echo "</div>"; 
            }
        }else{
            echo "<div class='col-md-6 col-md-offset-3 mx-auto'>";
            echo "<div class='alert alert-danger text-center'> Login Gagal </div>";
            echo "<meta http-equiv='refresh' content='1;url-index.php/menu.php'>";
            echo "</div>";


        }
    }

    ?>
</html>