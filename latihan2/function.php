<?php
function salam($waktu = "Datang", $nama = "admin"){
    return "Good $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset"UTF=8">
    <Meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widh=device-widht, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
  <h1><?= salam("Night", "Pacar Lin Yi");?></h1>
</body>
</html>
