<?php 
$siswa = [
    ["Zia", "0030024631", "RPL", "zia_29rpl@student.smktelkom-mlg.sch.id"],
    ["Nafi", "0030024632", "RPL", "nafi_29rpl@student.smktelkom-mlg.sch.id"],
    ["Siti", "0030024633", "RPL", "siti_29rpl@student.smktelkom-mlg.sch.id"]
];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Daftar Siswa</title>
</head>
<body>

    <h1>Daftar Siswa</h1>

    <!-- <ul>
        <?php foreach ($siswa as $sw) {?>
            <li><?= $sw; ?></li>
        <?php } ?> 
    </ul> -->

    <?php foreach ($siswa as $sw) { ?>
    <ul>
        <li>Nama : <?= $sw[0]; ?></li>
        <li>NISN : <?= $sw[1]; ?></li>
        <li>Jurusan : <?= $sw[2]; ?></li>
        <li>Email : <?= $sw[3]; ?></li>
    </ul>
    <?php } ?> 

</body>
</html>
