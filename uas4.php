<?php
    require_once 'koneksi.php';
    parse_str(file_get_contents('php://input'), $value);

    //1. string untuk query (Buatlah API untuk menghapus sebuah matakuliah)
    $KdMataKuliah = $value['KdMataKuliah'];
    $query = "DELETE FROM tmatakuliah WHERE KdMataKuliah='$KdMataKuliah'";

    //2. JALANKAN QUERY
    $r = mysqli_query($conn,$query);

    //tampilkan output JSON
    if ($r){
        echo json_encode(array('message' => 'Berhasil hapus data Mata Kuliah'));
    } else {
        echo json_encode(array('message' => 'Gagal hapus data Mata Kuliah'));
    }
?>