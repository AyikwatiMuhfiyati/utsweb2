<?php
    include 'connection.php';
    $query = "SELECT * FROM data_barang WHERE nama = '$_GET[nama]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
       $nama = $data['nama'];
       $kategori = $data['kategori'];
        $jumlah_stok = $data['jumlah_stok'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="nama">Nama Barang</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama"value ="<?php echo $nama; ?>" required>
            </div>
            
            <div class="form-group">
                <label class="mt-2mb-2" for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" value="<?php echo $kategori;?>"  required>
            </div>
           
            <div class="form-group">
                <label class="mt-5-mb-5" for="jumlah_stok">Jumlah Stok</label>
                <input type="text" class="form-control" name="jumlah_stok" id="jumlah_stok" placeholder="masukan jumlah stok"value ="<?php echo $jumlah_stok; ?>" required>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>