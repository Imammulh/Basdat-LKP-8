<?php
$db=pg_connect('host=localhost dbname=sekolah user=postgres password=imam123');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
