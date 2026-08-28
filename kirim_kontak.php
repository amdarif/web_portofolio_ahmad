<?php

include "koneksi.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

$query = "INSERT INTO kontak (nama, email, pesan)
          VALUES ('$nama', '$email', '$pesan')";

mysqli_query($koneksi, $query);

header("Location: index.php");

exit;

?>