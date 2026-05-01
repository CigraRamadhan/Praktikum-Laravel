<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        @foreach ($data as $mahasiswa)
            <tr>
                <td>{{ $loop -> iteration }} </td>
                <td>{{ $mahasiswa -> nama }}</td>
                <td>{{ $mahasiswa -> nim }}</td>
                <td>{{ $mahasiswa -> jurusan }}</td>
            </tr>
        
        @endforeach
    </table>
</body>
</html>