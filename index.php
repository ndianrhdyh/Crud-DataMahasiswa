<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Buku Perpustakaan</h2>
<a href="tambah.php">+ Tambah Buku</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>

    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM buku");
    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['penerbit']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
