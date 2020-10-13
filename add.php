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
    <h2>Tambah Data Product</h2>
    <a href="index.php">Kembali</a>
    <form action="add.php" method="post">
      <table width="30%">
        <tr>
          <td>Merk</td>
          <td><input name="merk" id="merk" type="text" placeholder="Isi merek.."></td>
        </tr>
        <tr>
          <td>Warna</td>
          <td><input name="warna" id="warna" type="text" placeholder="Isi warna produk.."></td>
        </tr>
        <tr>
          <td>Jumlah</td>
          <td><input name="qty" id="qty" type="number"></td>
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
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $qty = $_POST['qty'];

    include_once('koneksi.php');

    $result = mysqli_query($db, "INSERT INTO sepatu(merk,warna,qty) VALUES('$merk','warna','$qty')");
    echo "Berhasil tambah data produk! <a href='index.php'>View Product</a>";
  }
?>