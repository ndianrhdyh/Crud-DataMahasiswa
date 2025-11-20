<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Buku</h2>

<form method="POST">
    Judul: <input type="text" name="judul" value="<?= $row['judul']; ?>" required><br><br>
    Penulis: <input type="text" name="penulis" value="<?= $row['penulis']; ?>" required><br><br>
    Penerbit: <input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" required><br><br>
    Tahun: <input type="number" name="tahun" value="<?= $row['tahun']; ?>" required><br><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE buku SET 
        judul='$_POST[judul]',
        penulis='$_POST[penulis]',
        penerbit='$_POST[penerbit]',
        tahun='$_POST[tahun]'
        WHERE id=$id
    ");
    header("location:index.php");
}
?>

</body>
</html>
