```html
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<h2>Edit Mahasiswa</h2>

<form action="/mahasiswa/{{ $mahasiswa->npm }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>NIDN</label>
<input type="text"
       name="nidn"
       value="{{ $mahasiswa->nidn }}"
       class="form-control">
</div>

<div class="mb-3">
<label>Nama</label>
<input type="text"
       name="nama"
       value="{{ $mahasiswa->nama }}"
       class="form-control">
</div>

<button class="btn btn-primary">
Update
</button>

</form>

</div>

</body>
</html>
```
