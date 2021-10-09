<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// Digunakan untuk menggunakan fitur query builder
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
  public function index(){
    // Mengambil data siswa
    $siswa = DB::table('tbl_siswa')->get();

    // Mengirim data siswa
    return view('index', ['tbl_siswa' => $siswa]);
  }

  // View untuk tambah data siswa
  public function tambah(){
    // Memanggil view tambah
    return view('tambah');
  }

  // Method yang digunakan untuk melakukan insert data pada tbl_siswa
  public function store(Request $request){
    DB::table('tbl_siswa')->insert([
      'nisn' => $request->nisn,
      'nama' => $request->nama,
      'kelas' => $request->kelas,
      'jenis_kelamin' => $request->jenis_kelamin
    ]);

    // Setelah proses selesai, alihkan ke laman /siswa lagi
    return redirect('/siswa');
  }

  // Method yang digunakan untuk melakukan edit data siswa
  public function edit($id){
    // Mengambil data siswa sesuai dengan yang dipilih
    $siswa = DB::table('tbl_siswa')->where('id', $id)->get();
    // $siswa = 'Dummy Data';

    // Passing data ke edit.blade.php
    // return view('edit', ['tbl_siswa' => $siswa]);
    return view('edit', compact(['siswa']));
  }

  public function update(Request $request){
    // Update data siswa
    DB::table('tbl_siswa')->where('id', $request->id)->update([
      'nisn' => $request->nisn,
      'nama' => $request->nama,
      'kelas' => $request->kelas,
      'jenis_kelamin' => $request->jenis_kelamin
    ]);

    // Setelah proses selesai, alihkan ke laman /siswa lagi
    return redirect('/siswa');
  }

  // Menghapus data siswa
  public function hapus($id){
    // Hapus berdasarkan id yang dipilih
    DB::table('tbl_siswa')->where('id', $id)->delete();

    // Alihkan ke halaman siswa
    return redirect('/siswa');
  }
}
