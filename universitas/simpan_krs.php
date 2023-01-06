<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian krs</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
    <form action="simpan_krs.php" method="post">
    <table width="427">
		<tr>        
			<td width="67">nim</td>
			<td width="348"><input type="text" name="nim" /></td>
		</tr>
<tr>
<td>nama</td>
<td><input type="text" name="nama" /></td>
</tr>
<td colspan="2">Daftar Mata Kuliah</td>
<tr>
<?php
$mata_kuliah= array("pembukuan2","Akuntansi","Sistem pakar,Basis data","Akuntansi 2");
for($i=0; $i<count($mata_kuliah); $i++) {
?>
<tr>
<td colspan="2">
<input name="mata_kuliah[]" type="checkbox" id="mata_kuliah[]" value="<?php echo $mata_kuliah[$i]; ?>" />
<?php echo $mata_kuliah[$i];?></td>
</tr>
<?php }  ?>
<tr>
<td><input name="oke" type="submit" id="oke" value="proses" /></td>
</tr>
</tr></table>
</form>
</body>
</html>