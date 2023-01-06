<head>
<meta http-equiv="Content-Type" content="text/htal charsetutf-8"/>
 <title>Untitled Document</title> 
</head>

<body>
<?php
$nim $_POST['nim']
$nama=$_POST['nama'];
$mata_kuliah=$_POST('mata_kuliah');
$conect mysqli_connect("localhost","root","","universitas");
mysqli_autocommit ($conect, FALSE);
$valid-true;
for($i=0; $i<count($mata_kuliah); $i++) (
$sql-"INSERT INTO krs (id krs, nim, nama,mata_kuliah) values (null,'$nim',"$nama','$mata_kuliah($i)')";

$hasil=mysqli_query($conect, $sql);
echo $sql."<br>";
$vaild= $valid  && $valid;
)

if ($valid) {
mysqli_commit($conect);
$msg="berhasil";)
else ( mysqli rollback($conect);
Smsg="gagal";)

</body>
</html>


