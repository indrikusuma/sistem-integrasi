<?php
    require_once 'koneksi.php';
    //1. string untuk query (Buatlah API untuk menampilkan data nim,nama lengkap, jenis kelamin, kelas dari mahasiswa dengan input filter jenis kelamin.)
    $jk = $_GET['jk'];
    $query = "SELECT * FROM tmahasiswa where JenisKelamin = '$jk' ORDER BY NIM ASC";

    //2. JALANKAN QUERY    
    $r = mysqli_query($conn,$query);

    //SIMPAN KE ARRAY
    $result = array();
    while($row = mysqli_fetch_array($r)){
        array_push($result, array(
            "NIM" =>$row['NIM'],
            "Nama Lengkap" =>$row['NamaLengkap'],
            "Jenis Kelamin" =>$row['JenisKelamin'],
            "Kelas" =>$row['KELAS']
        ));
    }
    //tampilkan output JSON
    echo json_encode($result);
    //tutup koneksi
    mysqli_close($conn);
?>