<?php
    include 'connection.php';

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $jumlah_stok = $_POST['jumlah_stok'];

    $query_tambah = "INSERT INTO data_barang (nama,kategori,jumlah_stok) VALUES ('$nama','$kategori','$jumlah_stok')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>