<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <table class="table table-dark table-striped">
        <h1>Tambah Mahasiswa</h1>
        <form action="/mahasiswa/store" method="POST">
            @csrf
            Nama : <input type="text" name="nama"><br><br>
            Nim : <input type="text" name="nim"><br><br>
            Jurusan : <input type="text" name="jurusan"><br><br>
            <button type="submit">Simpan</button>
        </form>
    </table>

</body>
</html>
