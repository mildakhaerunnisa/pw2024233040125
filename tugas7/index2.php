<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="12" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
        <td><?= $row["npm"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>