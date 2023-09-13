<?php
// $mahasiswa = [
//     ["eunwoo", "001", "teknik", "eun@gmail.com", ],
//     ["linyi", "002", "sastra inggris", "lin@gmail.com", ],
//     ["jisoo", "003", "ekonomi", "jicu@gmail.com", ]
// ];
 
// Array Associative
// definisinya sama seperti array menarik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "eunwoo",
        "nrp" => "001",
        "jurusan" => "teknik",
        "email" => "eun@gmail.com",
        "gambar" => "eunwo.jpg"
    ],
    [
        "nama" => "linyi",
        "nrp" => "002",
        "jurusan" => "sastra inggris",
        "email" => "lin@gmail.com",
        "gambar" => "linyi.jpg"
    ],
    [
        "nama" => "jisoo",
        "nrp" => "003",
        "jurusan" => "ekonomi",
        "email" => "jicu@gmail.com",
        "gambar" => "jicu.jpg"
    ]
    ];

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>
    
    <body>
        <h2>Daftar Mahasiswa</h2>
    
        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
               <li>
               <img src="../img/<?= $mhs["gambar"]; ?>" alt="" width="250">
               </li>
               <li>Nama :<?= $mhs["nama"]; ?></li>
               <li>Nrp :<?= $mhs["nrp"]; ?></li>
               <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
               <li>Email :<?= $mhs["email"]; ?></li>
               
              
    
            </ul>
        <?php endforeach; ?>
    
    </body>
    
    </html>
    