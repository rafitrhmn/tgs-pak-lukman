<html>
<head>
    <title>pemograman berbasis objek </title>
	<body>
		<h1>Data dosen universitas bina insan Lubuklinggau</h1>
	</body>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: powderblue !important;
        }
        form {
        font-size: 25px;
        color: white;
        background: #2F495A;
        margin: 10px auto;
        padding: 50px 20px 50px 20px;
        border-radius: 5px;
        }
        table {
		background: #2F495A;
        color:white;
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
		$nidn = $_POST['nidn'];
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$mata_kuliah = $_POST['mata_kuliah'];
        $alamat = $_POST['alamat'];
		$no_telpon = $_POST['no_telpon'];
	
	$sql= "INSERT INTO dosen VALUES('$nidn','$nama','$fakultas','$prodi','$mata_kuliah','$alamat','$no_telpon')";
	$data = $database->query($sql);
	header("location:beranda.php?page=1");
	} ?>
	<form method="post" action="">	
		<div class="container">
		<tr>				
				<td>nidn :</td>
				<td><input class="form-control" style="width: 1000px; " type="text" name="nidn"></td>
			</tr>
			<tr>				
				<td>nama :</td>
				<td><input class="form-control" style="width: 1000px; " type="text" name="nama"></td>
			</tr>					
			<tr>
				<td>fakultas :</td>
				<td><select class="form-control" style="width: 1000px; " name="fakultas">
					<option values ="FAKULTAS TEKHNIK">fakultas tekhnik</option>
					<option values ="FAKULTAS HUMANIORA">fakultas humaniora</option>
					<option values ="FAKULTAS PERTANIAN">fakultas pertanian</option>
				</select> 
 				</td>
			</tr>
			<tr>
			<td>prodi :</td>
				<td><select class="form-control"style="width: 1000px; " name="prodi">
					<option values ="INF">informatika</option>
					<option values ="SI">sistem informasi</option>
					<option values ="RSK">rekayasa sistem informasi</option>
					<option values ="manajemen">manajemen</option>
					<option values ="akuntansi">akuntansi</option>
					<option values ="argo">argoteknologi</option>
					<option values ="HKM">hukum</option>
				</select> 
 				</td>
			</tr>
			<tr>
			<td>mata kuliah :</td>
				<td><select class="form-control" style="width: 1000px; " name="mata_kuliah">
					<option values ="pkn">pendidikan kewarnegaraan</option>
					<option values ="english">bahasainggris</option>
					<option values ="pemograman">pemograman dasar</option>
					<option values ="manajemen dasar">manajemen</option>
					<option values ="akuntansi dasar">akuntansi</option>
					<option values ="biologi">argoteknologi</option>
					<option values ="hukum perdata">hukum</option>
				</select> 
 				</td>
			</tr>
			<tr>
				<td>alamat:</td>
				<td><textarea class="form-control" style="width: 1000px; " name="alamat" cols="30" rows="15"></textarea></td>
			</tr>
			<tr>
				<td>no_telepon</td>
				<td><input class="form-control" style="width: 1000px; " type="text" name = "no_telpon"></td>
			</tr>
			<tr>
				<tr colspan= "2" alighn= "center">
					<td><input class="btn btn-success" type="submit" name="simpan" value="simpan"></td>
					<td><input class="btn btn-primary" type="submit" name="cancel" value="reset"></td>
			</tr>
</div>
	</form>
	<table border="1" cellspacing="0" class="table">
				<tr>
					<td>NIDN</td>
					<td>Nama</td>
					<td>Fakultas</td>
					<td>Prodi</td>
					<td>Mata Kuliah</td>
					<td>Alamat</td>
					<td>No Telpon</td>
					<td>Opsi</td>
				</tr>
<?php
	$sql= "SELECT * FROM dosen";
	$data = $database->query($sql);
?>

<?php if ($data->num_rows > 0) {
		// jika data benar
		while($row = $data->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['nidn']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['fakultas']; ?></td>
					<td><?php echo $row['prodi']; ?></td>
					<td><?php echo $row['mata_kuliah']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['no_telepon']; ?></td>
					<td>
						<a class="btn btn-danger" href="delete_dosen.php?nidn=<?php echo"$row[nidn]";?>">Delete </a>
						<a class="btn btn-warning" type= "submit">Edit </a>
					</td>
				</tr>
			
	<?php 	}?>
	</table>
	<?php } else {
		// jika data salah
		echo "data kosong";
	} ?>
