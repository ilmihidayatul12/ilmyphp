<?php
// koneksi ke database
$coon = mysqli_connect ("localhost", "root", "" "phpdasarilmi");


function query($query) {
    global $conn;
    $result =mysqli_query($conn, $query );
    $row= [];
    while( $row = mysqli_fetch_assoc($result) ){
        $row[] = $row;
    }
    return $rows;
}
?>

    
