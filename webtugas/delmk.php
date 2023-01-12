<?php
	$database = new mysqli('localhost','root','','universitas');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	$sql = "DELETE FROM matakuliah where id_matakuliah =('$_GET[id_matakuliah]')";
	$data=$database->query($sql);
	header("location:beranda.php?page=2");
	?>