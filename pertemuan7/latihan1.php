<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gambar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) { ?> 
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php } ?>
    </ul>
</body>
</html>

<?php

    // // $_GET
    // $_GET["nama"] = "Zia";
    // $_GET["nrp"] = "1234";
   
    // var_dump($_GET);
    // ? key = value &

    // // // $x = 10;

    // // function tampilX() {
    // //     global $x;
    // //     echo $x;
    // // }

    // // tampilX();
    // // // echo "<br>";
    // // // echo $x;

    // // SUPERGLOBALS 
    // // variable global milik PHP
    // // merupakan Array Associative
    // var_dump($_SERVER);
    // echo "<br><br>";
    // echo $_SERVER["SERVER_NAME"];

?>