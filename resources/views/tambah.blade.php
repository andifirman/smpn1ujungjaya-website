<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Laman untuk menambah data siswa </title>
</head>

<body>
  <h3> Data Siswa </h3>
  <a href="/siswa"> Kembali </a>

  <br>

  <form action="/siswa/store" method="post">
  <!-- Untuk men-generate token secara random untuk protection -->
    {{ csrf_field() }}

    NISN <input type="text" name="nisn" require="required"><br>
    Nama <input type="text" name="nama" require="required"><br>
    Kelas <input type="text" name="kelas" require="required"><br>
    Jenis Kelamin <input type="text" name="jenis_kelamin" require="required"><br>

    <input type="submit" value="Simpan Data">
  </form>

</body>
</html>