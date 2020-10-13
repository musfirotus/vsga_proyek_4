<?php
include_once('koneksi.php');
$result = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id_siswa ASC");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VSGA 2020 | Project 3</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>
  <h2>Data Product</h2>
  <a href="add.php">Tambah</a>
  <table class="table" border=1>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>No. HP</th>
        <th>Umur</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($data = mysqli_fetch_array($result)) {
        echo "<tr>
          <td>".$no++."</td>
          <td>".$data['nama_siswa']."</td>
          <td>".$data['jk']."</td>
          <td>".$data['phone_number']."</td>
          <td>".$data['age']."</td>
          <td>".$data['email']."</td>
          <td>".$data['alamat']."</td>
          <td>".$data['username']."</td>
          <td>".$data['password']."</td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</body>

</html>