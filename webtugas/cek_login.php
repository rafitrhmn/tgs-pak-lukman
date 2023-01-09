<?php
// ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// sambungkan ke database
$conn = new mysqli('localhost', 'root','','universitas');

// periksa apakah username dan password cocok dengan data di database
$result = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
if ($result->num_rows > 0) {
  // username dan password cocok, arahkan ke halaman beranda
  header('Location: beranda.php');
  exit;
} else {
  // username atau password tidak cocok
  echo "Username atau password salah. Silakan coba lagi.";
}

// tutup koneksi ke database
$conn->close();
?>