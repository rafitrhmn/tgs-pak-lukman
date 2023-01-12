<?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register Member - PHP</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 offset-md-4 mt-5">
    				<?php
    				if(isset($_SESSION['error'])) {
    				?>
    				<div class="alert alert-warning" role="alert">
    				  <?php echo $_SESSION['error']?>
    				</div>
    				<?php
    				}
    				?>
    				<?php
    				if(isset($_SESSION['message'])) {
    				?>
    				<div class="alert alert-success" role="alert">
    				  <?php echo $_SESSION['message']?>
    				</div>
    				<?php
    				}
    				?>
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register Form</h1>
    					</div>
    					<div class="card-body">
    						<form action="process-register.php" method="post">
    							<div class="form-group">
    								<label for="username">Nama Lengkap</label>
    								<input type="text" name="nama" class="form-control" id="name" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
    							</div>
    							<div class="form-group">
    								<label for="password">Konfirmasi Password</label>
    								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">
    							</div>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
    <?php
    session_destroy();
    ?>
    
    $conn = new mysqli('localhost', 'root','','universitas');
    
    //check apakah user dengan username tersebut ada di table users
    $query = "SELECT * from admin where username = ? limit 1";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('s', $user['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);
    //jika username sudah ada, maka return kembali ke halaman register.
    if($row != null){
    	$_SESSION['error'] = 'Username yang anda masukkan sudah ada di database.';
    	header("Location: daftar.html");
    }else{
    	//username unik. simpan di database.
    	$query = "INSERT into admin (username, password) values  (?,?)";
    	$stmt = $mysqli->stmt_init();
    	$stmt->prepare($query);
    	$stmt->bind_param('sss',$user['username'],$user['password']);
    	$stmt->execute();
    	$result = $stmt->get_result();
    	var_dump($result);
    	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
    	header("Location: register	.php");
    }
    ?>
    
	//validasi jika password & password_confirmation sama
    if($user['password'] != $user['password2']){
    	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    	header("Location: daftar.html");
    }