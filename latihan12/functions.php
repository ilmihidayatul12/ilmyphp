<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasarilmi");

function query($query)
 {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
 {
     //  ambil data dari elemen tiap form
    global $conn;

    $nrp = htmlspecialchars($data ["nrp"]);
    $nama = htmlspecialchars($data ["nama"]);
    $email = htmlspecialchars($data ["email"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
                mysqli_query($conn, $query);

              return mysqli_affected_rows($conn);
}

function upload()
 {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tnpName = $_FILES['gambar']['tnp_name'];

    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!'); 
                </script>";
        return false;
    }

    // cek apakah yang di upload adalah gamabr
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu!'); 
                    </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000 ) {
                echo "<script>
                        alert('pilih gambar terlebih dahulu!'); 
                        </script>";
                return false;
        }

        // cek apakah tidak ada gambar yang diupload
        // generate nama gambar baru

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // lolos pengecekan, gambar siap siap diupload
        move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

        return $namaFileBaru;
            
        }
            function hapus($id) 
            {
                global $conn;
                mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");

                return mysqli_affected_rows($conn);
            }

            function ubah($id)
             {
                global $conn;  

                $id = $data["id"];
                $nama = htmlspecialchars($data["nama"]);
                $nrp = htmlspecialchars($data["nrp"]);
                $email = htmlspecialchars($data["email"]);
                $jurusan = htmlspecialchars($data["jurusan"]);
                $gambarLama = htmlspecialchars($data["gambarLama"]);

                // cek apakah user pilih gambar baru atau tidak
                if( $_FILES['gambar']['error'] === 4 ) {
                    $gambar = $gambarLama;
                } else {
                $gambar = upload();
                }


                // query insert data
                $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
                mysqli_query($conn, $query);

                 return mysaqli_effected_rows($conn);
            }

            function cari($keyword)
             {
                $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR 
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";           
                return query($query);
            }

           function registrasi($data) 
           {
                global $conn;

                $username = strtolower(stripslashes($data['username']));
                $password = mysqli_real_escape_string($conn, $data["password"]);
                $password2 = mysqli_real_escape_string($conn, $data["password2"]);
          
                // cek username sudah ada atau belum
                $result = mysqli_query($conn, "SELECT username FROM user 
                WHERE username = '$username'");
                if( mysqli_fetch_assoc($result) ) {
                    echo "<script>
                    alert('pilih gambar terlebih dahulu!'); 
                    </script>";
            return false;
        }
        
        // cek konfirmasi password
        if( $password !== $password2) {
            echo "<script>
                        alert('pilih gambar terlebih dahulu!'); 
                        </script>";
                return false;
            }

            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);

            // tambahkan user baru ke database
            mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

            return mysqli_affected_rows($conn);
        }
