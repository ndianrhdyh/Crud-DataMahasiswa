<?php include('db.php'); ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<h2>Edit Data Mahasiswa</h2>
<form method="post" action="">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id=$id");
    header("Location: index.php");
}
?>

</body>
</html>