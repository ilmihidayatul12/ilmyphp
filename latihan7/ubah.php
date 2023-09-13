<?php
require 'funcions.php';

// ambil data dari URL 
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah diubah atau belum
if( isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahakan atau tidak
    if ( tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        ducument.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        !";
    }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale1.0">
<title>Tambah data mahasiswa</title>
</head>

<body>
<h1>Tambah data mahasiswa</h1>

<form action="" method="post">
<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
<ul>
<li>
<label for="nrp">NRP : </label>
<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
</li>
<li>
<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
</li>
<li>
<label for="email">Email : </label>
<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
</li>
<li>
<label for="jurusan">Jurusan : </label>
<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
</li>
<li>
<label for="gambar">Gambar : </label>
<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
</li>
<li>
<button type="submit" name="submit">Ubah Data!</button>
</li>
<ul>

</form>

</body>
