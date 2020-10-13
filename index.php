<?php
include_once('koneksi.php');
$result = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id_siswa ASC");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VSGA 2020 | Project 4</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-theme.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h2>Data Mahasiswa</h2>
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
            <th>Aksi</th>
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
              <td><a href='edit.php?id=$data[id_siswa]'>Edit</a> |
              <a href='delete.php?id=$data[id_siswa]'>Delete</a></td>
            </tr>";
          }
          ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</body>

</html>