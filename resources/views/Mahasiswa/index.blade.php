```html
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/create" class="btn btn-primary mb-3">
        Tambah Mahasiswa
    </a>

    <table class="table table-bordered">

        <tr>
            <th>NPM</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->npm }}</td>
            <td>{{ $m->nidn }}</td>
            <td>{{ $m->nama }}</td>

            <td>

                <a href="/mahasiswa/{{ $m->npm }}/edit"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/mahasiswa/{{ $m->npm }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>
```
