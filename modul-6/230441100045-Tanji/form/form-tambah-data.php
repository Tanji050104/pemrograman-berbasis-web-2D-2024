<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!---Bootstrap CSS--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center ">
        <form style="margin: 10px; width: 50%;" action="../proses/tambah.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputCatalog" class="form-label">Kode Buku</label>
                <input type="text" class="form-control" id="inputCatalog" name="kode-buku">
            </div>
            <div class="mb-3">
                <label for="inputJudul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="inputJudul" name="judul">
            </div>
            <div class="mb-3">
                <label for="inputPenulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="inputPenulis" name="penulis">
            </div>
            <div class="mb-3">
                <label for="inputTahunTerbit" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="inputTahunTerbit" name="tahun-terbit">
            </div>
            <div class="mb-3">
                <label for="inputgambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="inputSampul" name="gambar" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    
</body>
</html>