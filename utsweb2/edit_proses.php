<?php
    include('connection.php');
    $nama = $_POST['nama'];    
    $kategori = $_POST['kategori'];
    $jumlah_stok = $_POST['jumlah_stok']; 

        $query_edit = "UPDATE data_barang SET nama='$nama', kategori='$kategori', jumlah_stok='$jumlah_stok' WHERE nama = '$nama' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$nama");
        }
?>