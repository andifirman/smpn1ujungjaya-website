<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Melihat Data Siswa </title>
</head>

<body>
  <h2> Melihat Data Siswa Dari Database </h2>  
  <h3> CRUD </h3>

  <a href="/siswa/tambah"> Tambah data siswa baru </a>

  <br>

  <table border="1">
    <tr>
      <th> NISN </th>
      <th> Nama </th>
      <th> Kelas </th>
      <th> Jenis Kelamin </th>
      <th> Aksi </th>
    </tr>

    @foreach($tbl_siswa as $i)
    <tr>
      <td> {{ $i->nisn }} </td>
      <td> {{ $i->nama }} </td>
      <td> {{ $i->kelas }} </td>
      <td> {{ $i->jenis_kelamin }} </td>
      <td>
        <a href="/siswa/edit/{{ $i->id }}"> Edit </a> |
        <a href="/siswa/hapus/{{ $i->id }}"> Hapus </a>
      </td>
    </tr>
    @endforeach

  </table>

</body>
</html>

