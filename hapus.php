<?php
include("config.php");
if( isset($_GET['id']) ){
    
    $id = $_GET['id'];

    $query = pg_query("DELETE FROM calonsiswa WHERE id = $id");

    if( $query ){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
        header('Location: daftarsiswa.php');
    } else {
        die("gagal menghapus ...");
    }
} else {
    die("akses dilarang ...");
}
?>