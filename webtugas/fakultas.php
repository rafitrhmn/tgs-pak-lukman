<html>
<head>
	<title>Pemrograman Berorientasi Objek</title>
	<body>
		<h1>Data Fakultas</h1>
	</body>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: powderblue !important;
		}
		form{
		font-size: 25px;
		color: white;
		background: #2F495A;
		margin: 10px auto;
		padding: 50px 20px 50px 20px;
		border-radius: 5px;
		}
		table {
		background: #2F495A;	
		color: white;
		width: 600px;  
		padding: 10px 10px 50px 10px;
	}
	</style>
</head>
<body>
<?php
	$database = new mysqli('localhost','root','','universitas');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
if(isset($_POST['simpan'])){
		$id_fakultas = $_POST['id_fakultas'];
		$nama_fakultas = $_POST['nama_fakultas'];

	$sql= "INSERT INTO fakultas VALUES('$id_fakultas','$nama_fakultas')";
	$data = $database->query($sql);
	header("location:beranda.php?page=3");
	} ?>
	<form method="post" action="">	
		<div class="container">
			<tr>
				<td>ID_FAKULTAS:</td>
				<td><input class="form-control" type="text" name="id_fakultas"></td>
			</tr>
			<tr>
			<td>NAMA_FAKULTAS:</td>
				<td><input class="form-control" type="text" name="nama_fakultas"></td>
			</tr>
			<tr colspan="2" alighn="center">
				<td><input class="btn btn-primary" type="submit" name="simpan" value="simpan"></td>
				<td><input class="btn btn-primary" type="reset" name="cancel" value="reset"></td>
			</tr>	
			
		</div>
	</form>
<table border="1" cellspacing="0" class="table">
</tr>
				<tr>
					<td>ID fakultas</td>
					<td>Nama Fakultas</td>
					<td>Opsi</td>
				</tr>
<?php				

	$sql= "SELECT * FROM fakultas";
	$data = $database->query($sql);
?>

		
<?php if ($data->num_rows > 0) {
		// jika data benar
		while($row = $data->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['id_fakultas']; ?></td>
					<td><?php echo $row['nama_fakultas']; ?></td>
					<td>
						<a class="btn btn-danger"href="delfakul.php?id_fakultas=<?php echo"$row[id_fakultas]";?>">Delete </a>
						<a class="btn btn-warning" type="submit">Edit </a>
					<td>
				</tr>
			
	<?php 	}?>
	</table>
	<?php } else {
		// jika data salah
		echo "data kosong";
	} ?>
	</body>
	</html>
