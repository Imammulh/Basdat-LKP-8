<?php
    include("config.php");
    
    // cek apakah tombol update sudah diklik atau belum?
    $id = $_GET['id'];
    if(isset($_POST['update'])){

        // ambil data dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $sekolah = $_POST['sekolah_asal'];

        // buat query
        $data = "UPDATE calonsiswa SET nama = '".$nama."', alamat = '".$alamat."', jenis_kelamin = '".$jk."', sekolah_asal = '".$sekolah."' WHERE id = '".$id."'";
        $query = pg_query($data);

        // apakah query simpan berhasil?
        if( $query==TRUE ) {
            // kalau berhasil alihkan ke halaman daftarsiswa.php dengan status=sukses
            header('Location: daftarsiswa.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman daftarsiswa.ph dengan status=gagal
            header('Location: daftarsiswa.php?status=gagal');
        }


    } else {
        die("Akses dilarang...");
    }
?>