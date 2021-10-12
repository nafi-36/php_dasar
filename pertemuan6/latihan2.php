<?php 
    // $mahasiswa = [
    //     ["Zia", "1234", "zia@gmail.id", "RPL"],
    //     ["Nisa", "5678", "nisa@gmail.id", "TKJ"],
    // ];    
    // Array Associative
    $mahasiswa = [
        [
            "nama" => "Zia", 
            "nrp" => "1234", 
            "email" => "zia@gmail.id", 
            "jurusan" => "RPL",
            "gambar" => "zia.jpg"
        ],
        [
            "nama" => "Nisa", 
            "nrp" => "5678", 
            "email" => "nisa@gmail.id", 
            "jurusan" => "TKJ",
            "gambar" => "nisa.jpg"
        ]
    ];
    //echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .gambar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>
                <img class="gambar" src="gambar/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php } ?>
</body>
</html>