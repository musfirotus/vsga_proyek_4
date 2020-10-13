<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_siswa = $_POST['id_siswa'];

    $nama_siswa=$_POST['nama_siswa'];
    $jk=$_POST['jk'];
    $phone_number=$_POST['phone_number'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];

    // update user data
    $result = mysqli_query($db, "UPDATE mahasiswa SET nama_siswa='$nama_siswa',jk='$jk',phone_number='$phone_number',age='$age',email='$email',alamat='$alamat' WHERE id_siswa=$id_siswa");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_siswa = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_siswa=$id_siswa");

while($user_data = mysqli_fetch_array($result))
{
    $nama_siswa = $user_data['nama_siswa'];
    $jk = $user_data['jk'];
    $phone_number = $user_data['phone_number'];
    $age = $user_data['age'];
    $email = $user_data['email'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<head>  
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-theme.css">
  <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama_siswa" value="<?php echo $nama_siswa;?>"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jk" value="<?php echo $jk;?>"></td>
            </tr>
            <tr> 
                <td>No. HP</td>
                <td><input type="text" name="phone_number" value="<?php echo $phone_number;?>"></td>
            </tr>
            <tr> 
                <td>Umur</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_siswa" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>