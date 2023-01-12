<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian krs</title>
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

	<div class="container">
		<h1>From KRS</h1>
	<form method="post" action="simpan_krs.php">
		<table width="427" class="">
			<tr>
				<td>nim</td>
				<td><input class="form-control" type="text" name="nim"/></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input class="form-control" type="text" name="nama"/></td>
			</tr>
			<tr>
				<td colspan="2">daftar mata kuliah yang ada</td>
			</tr>
			<?php
			$mata_kuliah=array("pembukuan 2","akutansi","sistem pakar","basis data","akutansi 2");
			for ($i=0; $i<count($mata_kuliah); $i++){ 
			 ?>
			<tr>
				<td colspan="2">
				<input type="checkbox" name="mata_kuliah[]" id="mata_kuliah[]" value="<?php echo $mata_kuliah[$i]; ?>" />
				<?php echo $mata_kuliah[$i]; ?></td>		
			</tr>
			<?php }?>
			<tr>
				<td><input name="ok" type="submit" class="btn btn-primary" id="ok" value="proses"/></td>
			</tr>
		</tr></table>
	</form>
</div>
</body>
</html>