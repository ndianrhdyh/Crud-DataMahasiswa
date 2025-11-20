<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Data Mahasiswa</h2>
<form method="post" action="">
    Nama: <input type="text" name="nama" required><br><br>
    NIM: <input type="text" name="nim" required><br><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')");
    header("Location: index.php");
}
?>
</body>
</html>
