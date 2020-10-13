<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VSGA 2020 | Project 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-theme.css">
  </head>
  <body>
    <h2>Tambah Data Product</h2>
    <a href="index.php">Kembali</a>
    <form action="add.php" method="post">
      <table width="30%">
        <tr>
          <td>Nama Siswa</td>
          <td><input name="nama_siswa" id="nama_siswa" type="text"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input name="jk" id="jk" type="text"></td>
        </tr>
        <tr>
          <td>No. HP</td>
          <td><input name="phone_number" id="phone_number" type="number"></td>
        </tr>
        <tr>
          <td>Umur</td>
          <td><input name="age" id="age" type="number"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input name="email" id="email" type="email"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input name="alamat" id="alamat" type="text"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input name="username" id="username" type="text"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="pass" id="pass" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input name="Submit" type="submit" value="Tambah"></td>
        </tr>
      </table>
    </form>
  </body>
</html>

<?php
  if (isset($_POST['Submit'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $jk = $_POST['jk'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    include_once('koneksi.php');

    $result = mysqli_query($db, "INSERT INTO mahasiswa(nama_siswa,jk,phone_number,age,email,alamat,username,pass) VALUES('$nama_siswa','$jk','$phone_number','$age','$email','$alamat','$username','$pass')");
    echo "Berhasil tambah data mahasiswa! <a href='index.php'>Lihat Mahasiswa</a>";

    header("Location:index.php");
  }
?>