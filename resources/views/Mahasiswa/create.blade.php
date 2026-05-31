```html
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<h2>Tambah Mahasiswa</h2>

<form action="/mahasiswa" method="POST">

@csrf

<div class="mb-3">
<label>NPM</label>
<input type="text" name="npm" class="form-control">
</div>

<div class="mb-3">
<label>NIDN</label>
<input type="text" name="nidn" class="form-control">
</div>

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control">
</div>

<button class="btn btn-success">
Simpan
</button>

</form>

</div>

</body>
</html>
```
