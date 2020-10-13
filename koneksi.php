<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $db_name = "vsga_proyek_4";

  $db = mysqli_connect($server, $username, $password, $db_name);
  echo "Ye, bisa konek fir! <br>";
  if (!$db) {
    die("Yah, gagal konek :v <br>" . mysqli_connect_error());
  }
?>