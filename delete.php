<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($db, "DELETE FROM mahasiswa WHERE id_siswa=$id");

header("Location:index.php");
?>