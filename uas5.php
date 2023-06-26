<?php
    require_once 'koneksi.php';
    parse_str(file_get_contents('php://input'), $value);

    //1. string untuk query (Buatlah API untuk update data nama dosen)
    $KdDosen = $value['KdDosen'];
    $NamaDosen = $value['NamaDosen'];
    $KdMatKul = $value['KdMatKul'];
    $query = "UPDATE tdosen SET NamaDosen='$NamaDosen', KdMatKul='$KdMatKul' WHERE KdDosen='$KdDosen'";

    //2. JALANKAN QUERY
    $r = mysqli_query($conn,$query);

    //tampilkan output JSON
    if ($r){
        echo json_encode(array('message' => 'Berhasil update data Dosen'));
    } else {
        echo json_encode(array('message' => 'Gagal update data Dosen'));
    }
?>