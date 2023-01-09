<?php
	$database = new mysqli('localhost','root','','universitas');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	$sql =  "DELETE FROM dosen where nidn = ('$_GET[nidn]')";
	$data=$database->query($sql);
	header("location:index.php?page=1");
?>