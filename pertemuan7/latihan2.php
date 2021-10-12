<?php
if (!isset($_GET["nama"]) || 
    !isset($_GET["gambar"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        .gambar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img class="gambar" src="gambar/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>