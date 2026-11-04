
<!DOCTYPE html>
<html>
<head>
    <title>Detail Jurusan</title>
</head>
<body>

    <h1>Detail Jurusan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Kode Jurusan</th>
            <td>{{ $jurusan->kode }}</td>
        </tr>

        <tr>
            <th>Nama Jurusan</th>
            <td>{{ $jurusan->nama }}</td>
        </tr>

        <tr>
            <th>Dibuat</th>
            <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
        </tr>
    </table>

    <br>

    <a href="{{ url('/jurusan') }}">Kembali ke Daftar Jurusan</a>

</body>
</html>
