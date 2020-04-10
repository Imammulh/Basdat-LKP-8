<?php
    include("config.php");

    $id = $_GET["id"];
    if( isset($_POST["update"]) ){
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jk = $_POST["jenis_kelamin"];
        $sekolah_asal = $_POST["sekolah_asal"];

        $data = "UPDATE calonsiswa SET
            nama = '$nama',
            alamat = '$alamat',
            jenis_kelamin = '$jk',
            sekolah_asal = '$sekolah_asal'

            WHERE id = $id
        ";
        $query = pg_query($data);

        if( $query == TRUE ){
            header('Location: daftarsiswa.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman daftarsiswa.ph dengan status=gagal
            header('Location: daftarsiswa.php?status=gagal');
        }
    } 
    // else {
    //     die("Akses GK BOLEH");
    // }
?>