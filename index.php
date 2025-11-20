<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="add.php" class="tambah-data">+ Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>$no</td>
                <td>{$row['nama']}</td>
                <td>{$row['nim']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>

</body>
</html>