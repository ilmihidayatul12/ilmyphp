<?php
require 'funcions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil di tambahakan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
        <script>
    alert('data berhasil ditambahkan!');
    ducument.location.href = 'index.php';
    </script>
    ";
}else {
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
<ul>
<li>
<label form="nama">Nama : </label>
<input type="text" name="nama" id="nama"
require>
</li>
<li>
<label form="nrp">NRP : </label>
<input type="text" name="nrp" id="nrp">
</li>
<li>
<label form="email">Email : </label>
<input type="text" name="email" id="email">
</li>
<li>
<label form="jurusan">Jurusan : </label>
<input type="text" name="jurusan" id="jurusan">
</li>
<li>
<label form="gambar">Gambar : </label>
<input type="text" name="gambar" id="gambar">
</li>
<li>
<button type="submit" name="submit">Tamabah Datal</button>
</li>
</ul>


</form>

</body>
</html>


