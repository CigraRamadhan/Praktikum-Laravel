<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Mahasiswa</h1>
        <table class="table table-dark table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        
             @foreach ($data as $mahasiswa)
            <tr>
                <td>{{ $loop -> iteration }} </td>
                <td>{{ $mahasiswa -> nama }}</td>
                <td>{{ $mahasiswa -> nim }}</td>
                <td>{{ $mahasiswa -> jurusan }}</td>
                <td>
                    <a href="/mahasiswa/edit/{{ $mahasiswa->id }}">Edit</a> 
                </td>
                <td>
                    <a href="/mahasiswa/delete/{{ $mahasiswa->id }}">Hapus</a>
                </td>
            </tr>
             @endforeach
        </table>

        <div class="card-cody">
            <div class= "d-flex justify-content-beetwen align-items-center mb-4">
                <a href="/mahasiswa/create" class= "btn btn-primary">
                    <i class= "bi bi-plus-lg"></i> Tambah Mahasiswa
                </a>
            </div>

         </div>

    
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
