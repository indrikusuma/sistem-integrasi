<?php
    require_once 'koneksi.php';
    //1. string untuk query (Buatlah API untuk menampikan data matakuliah beserta NAMA dosen pengampunya.)
    $query = "SELECT mk.KdMatakuliah, mk.MataKuliah, d.KdDosen, d.NamaDosen, d.KdMatkul
              FROM tmatakuliah mk LEFT JOIN tdosen d ON mk.KdMatakuliah = d.KdMatkul ORDER BY mk.KdMatakuliah ASC";

    //2. JALANKAN QUERY
    $r = mysqli_query($conn,$query);

    //SIMPAN KE ARRAY
    $result = array();
    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "Kode Mata Kuliah" =>$row['KdMatakuliah'],
            "Mata Kuliah" =>$row['MataKuliah'],
            "Nama Dosen" =>$row['NamaDosen']
        ));
    }
    //tampilkan output JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);
?>