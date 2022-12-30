<html>
<head>
    <title>pemograman berbasis objek </title>
	<body>
		<h1>Data mahasiswa</h1>
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
	$database = new mysqli('localhost','root','','kampus');
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
	

	$sql= "INSERT INTO dosen VALUES('$nidn','$nama','$fakultas','$prodi','$mata_kuliah',$alamat','$no_telpon')";
	$data = $database->query($sql);
	header("location:dosen.php");
	} ?>
	<form method="post" action="">	
		<div class="container">
		<tr>				
				<td>nidn :</td>
				<td><input class="form-control" type="text" name="nidn"></td>
			</tr>
			<tr>				
				<td>nama :</td>
				<td><input class="form-control" type="text" name="nama"></td>
			</tr>					
			<tr>
				<td>fakultas :</td>
				<td><select class="form-control" name="fakultas">
					<option values ="1">komputer</option>
					<option values ="2">humaniora</option>
					<option values ="3">hukum</option>
				</select> 
 				</td>
			</tr>
			<tr>
			<td>prodi :</td>
				<td><select class="form-control" name="prodi">
					<option values ="1">rsk</option>
					<option values ="2">informatika</option>
					<option values ="3">sistem informasi</option>
					<option values ="4">manajemen</option>
				</select> 
 				</td>
			</tr>
			<tr>
			<td>mata kuliah :</td>
				<td><select class="form-control" name="mata_kuliah">
					<option values ="1">english</option>
					<option values ="2">pendidikan korupsi</option>
					<option values ="3">aljabar</option>
				</select> 
 				</td>
			</tr>
			<tr>
				<td>alamat:</td>
				<td><textarea class="form-control" name="alamat" cols="30" rows="15"></textarea></td>
			</tr>
			<tr>
				<td>no_telepon</td>
				<td><input class="form-control" type="text" name = "no_telpon"></td>
			</tr>
			<tr>
				<tr colspan= "2" alighn= "center">
					<td><input class="btn btn-success" type="submit" name="simpan" value="simpan"></td>
					<td><input class="btn btn-primary" type="submit" name="cancel" value="reset"></td>
			</tr>
</div>

<?php
	$sql= "SELECT * FROM dosen,fakultas,matakuliah,prodi where dosen.fakultas=fakultas.id_fakultas and dosen.prodi=prodi.id_prodi and dosen.mata_kuliah=matakuliah.id_matakuliah";
	$data = $database->query($sql);
?>

	</form>
	<table border="1" cellspacing="0" class="table">
				<tr>
					<td>nidn</td>
					<td>nama</td>
					<td>fakultas</td>
					<td>prodi</td>
					<td>mata_kuliah</td>
					<td>alamat</td>
					<td>no_telpon</td>
					<td>Opsi</td>
				</tr>

<?php if ($data->num_rows > 0) {
		// jika data benar
		while($row = $data->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['nidn']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['fakultas']; ?></td>
					<td><?php echo $row['prodi']; ?></td>
					<td><?php echo $row['mata kuliah']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['no_telpon']; ?></td>
					<td><a class="btn btn-danger" href="delete_dosen.php?nidn=<?php echo"$row[nidn]";?>">Delete</td>
				</tr>
			
	<?php 	}?>
	</table>
	<?php } else {
		// jika data salah
		echo "data kosong";
	} ?>
