<?php
include 'connection.php';

    $query_hapus = "DELETE FROM data_barang WHERE nama = '$_GET[nama]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
    
?>