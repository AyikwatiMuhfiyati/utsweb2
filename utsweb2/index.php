<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM data_barang");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
    <nav class="navbar navbar-primary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image.png" alt="" width="50" height="35" >
      <class style="font-size: 1rem; color: #000000">CRUD Barang</class>
    </a>
  </div>
</nav>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <a href="tambah.php" class="btn btn-primary" >Tambah</a>
                <h3 class="text-center"><b>Daftar barang</b></h3>
                <table class="table table-hover table-success">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Barang</td>
                            <td>Kategori</td>
                            <td>Jumlah Stok</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama'];?></td>
                            <td><?= $data['kategori'];?></td>
                            <td><?= $data['jumlah_stok'];?></td>
                            
                            <td>
                                <a href="edit.php?nama=<?= $data['nama']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?nama=<?= $data['nama']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>