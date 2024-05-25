<?php

$conn = mysqli_connect('localhost', 'root', '','phpdasar');

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>

        </tr>
        <?php $i =1;?>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>

        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>   
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin');">hapus</a>
        </td>

        <td><img src="img/<?= $row["gambar"]; ?>" width="80"  height="80"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["npm"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    
    <?php $i++;  ?>
     <?php endwhile; ?>
    </table>
</body>
</html>