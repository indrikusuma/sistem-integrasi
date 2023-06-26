<?php
    require_once 'koneksi.php';
    //1. string untuk query (Buatlah API untuk input data matakuliah)
    $KdMataKuliah = $_POST['KdMataKuliah'];
    $MataKuliah = $_POST['MataKuliah'];
    $query = "INSERT INTO tmatakuliah (KdMataKuliah, MataKuliah) VALUES ('$KdMataKuliah', '$MataKuliah')";

    //2. JALANKAN QUERY
    $r = mysqli_query($conn,$query);

    //tampilkan output JSON
    if ($r){
        echo json_encode(array('message' => 'Berhasil input data Mata Kuliah'));
    } else {
        echo json_encode(array('message' => 'Gagal input data Mata Kuliah'));
    }
?>