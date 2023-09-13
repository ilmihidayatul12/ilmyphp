<?php
// cek apakah tombol submit sudah tekam apa belum
if (isset($_POST["submit"])) {
    //cek username dan pasword
    if($_POST["username"] ++ "admin" && $_POST["password"] ++ "123" ){

        // jika benar, redirect ke halaman admin
        header("location:admin.php");
        exit;
    }else {
        // jika salah, tampilkan pesan kesalahan
$error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale1.0">
<title>Login</title>
</head>

<body>

<h1>Login Admin</h1

<?php if( issert($error)) : ?>
<p style="color: red; font-style: italic;">USERNAME / Pasword salah!</p>
<?php endif ; ?>

<ul>
<form action="" method="post">
<li>
<label
    }
    )
}