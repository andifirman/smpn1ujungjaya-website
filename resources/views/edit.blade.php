<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Mengedit data siswa </title>
</head>

<body>
  <h3> Edit siswa </h3>
  <a href="/siswa"> Kembali </a>

  <br>

  @foreach($siswa as $i)
  <form action="/siswa/update" method="post">
  {{ csrf_field() }}

    <input type="hidden" required="required" name="id" value="{{ $i->id }}"><br>
    NISN <input type="text" required="required" name="nisn" value="{{ $i->nisn }}"><br>
    Nama <input type="text" required="required" name="nama" value="{{ $i->nama }}"><br>
    Kelas <input type="text" required="required" name="kelas" value="{{ $i->kelas }}"><br>
    Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $i->jenis_kelamin }}"><br>

    <input type="submit" value="Simpan Data">
  </form>
  @endforeach

</body>
</html>