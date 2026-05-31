<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
</head>
<body>

    <h1>Data Supplier</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>

        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->nama_supplier }}</td>
            <td>{{ $supplier->alamat }}</td>
            <td>{{ $supplier->telepon }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>