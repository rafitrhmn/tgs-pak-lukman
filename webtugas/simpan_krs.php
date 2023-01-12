<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<!--koneksi.php-->
		<?php
	
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$mata_kuliah=$_POST['mata_kuliah'];
		$conect=mysqli_connect("localhost","root","","universitas");
		mysqli_autocommit($conect,FALSE);
		$valid=true;
		for ($i=0; $i<count($mata_kuliah); $i++){
			$sql="INSERT INTO krs(id_krs, nim, nama, mata_kuliah) values(null, '$nim', '$nama', '$mata_kuliah[$i]')";
			$hasil=mysqli_query($conect,$sql);
			echo $sql."<br>";
			$valid= $valid && $valid;
		}
		if ($valid) {
			// code...
			mysqli_commit ($conect);
			$msq="berhasil";}
		else {
			mysqli_rollback($conect);
			$msg="gagal";
		}

		 ?>
</body>
</html>