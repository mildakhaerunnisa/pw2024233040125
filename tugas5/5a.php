<?php
$mahasiswa = [
    [
        "nama" => "Choi Soobin",
        "npm" => "233040225",
        "email" => "soobin@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "soobin.png"
    ],
    [
        "nama" => "Hong Eunchae",
        "npm" => "233020223",
        "email" => "eunchae@mail.unpas.ac.id",
        "jurusan" => "Teknikologi Pangan",
        "gambar" => "eunchae.png"
    ],
    [
        "nama" => "Choi Yeonjun",
        "npm" => "233010245",
        "email" => "yeonjun@mail.unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "yeonjun.png"
    ],
    [
        "nama" => "Kazuha",
        "npm" => "233040224",
        "email" => "kazuha@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kazuha.png"
    ],
    [
        "nama" => "Choi Beomgyu",
        "npm" => "233030210",
        "email" => "beomgyu5@mail.unpas.ac.id",
        "jurusan" => "Teknik Mesin",
        "gambar" => "beomgyu.png"
    ],
    [
        "nama" => "Kim Yunjin",
        "npm" => "233040121",
        "email" => "yunjin@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "yunjin.png"
    ],
    [
        "nama" => "Kang Taehyun",
        "npm" => "233050115",
        "email" => "taehyun@mail.unpas.ac.id",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "taehyun.png"
    ],
    [
        "nama" => "Sakura",
        "npm" => "233060125",
        "email" => "sakura@mail.unpas.ac.id",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "sakura.png"
    ],
    [
        "nama" => "Heuning Kai",
        "npm" => "233010220",
        "email" => "kai@mail.unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "heuningkai.png"
    ],
    [
        "nama" => "Kim Chaewon",
        "npm" => "233040213",
        "email" => "Chaewon@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chaewon.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" >
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan  : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>