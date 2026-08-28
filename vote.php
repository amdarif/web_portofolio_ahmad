<?php

include "koneksi.php";

$id = $_POST["id"];

$query = "UPDATE keahlian_vote
          SET jumlah_vote = jumlah_vote + 1
          WHERE id = $id";

mysqli_query($koneksi, $query);

?>