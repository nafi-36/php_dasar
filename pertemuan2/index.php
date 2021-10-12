<?php
// Pertemuan 2 = PHP Dasar
// Sintaks PHP

// Standar Output : 
// echo, print(mencetak tulisan, mencetak isi variabel, dll)
// print_r(khusus digunakan untuk mencetak isi array)
// var_dump(digunakan untuk melihat isi dari variabel, tampil informasi tentang variabel)
// print_r & var_dump digunakan pada saat debugging

echo "Zia";
print "Zia"; // echo & print sama
print_r ("Zia"); // harus ada (), bisa mencetak string, array 
var_dump ("Zia"); // harus ada (), akan menampilkan informasi tipe data dan panjang data(termasuk spasi)
echo 123; // angka tidak perlu ""
echo true; // boolean tidak perlu "", boolean true akan menghasilkan angka 1
echo false; // boolean false akan menghasilkan kosongan
// bisa menuliskan echo "__" atau echo '__', lebih baik "__"

// Penulisan sintaks PHP:
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (tidak disarankan)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo "Zia"; ?></h1>
    <p><?php echo "abcdefghijklmnopqrstuvwxyz"; ?></p>
    <!-- HTML di dalam PHP -->
    <?php 
        echo "<h1>Halo, Selamat Datang Zia</h1>"
    ?>
</body>
</html>