<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArtikelController extends Controller
{
  // Memperlihatkan artikel yang ada
  public function show()
  {
    $articles = DB::table('artikel')->orderby('id', 'desc')->get();
    return view('show', ['articles'=>$articles]);
  }

  // Menambah artikel baru
  public function add_process(Request $article)
  {
    DB::table('artikel')->insert([
      'judul'=>$article->judul,
      'deskripsi'=>$article->deskripsi
    ]);

    return redirect()->action('ArtikelController@show');
  }

  // Memperlihatkan detail artikel
  public function detail($id)
  {
    $article = DB::table('artikel')->where('id', $id)->first();
    return view('detail', ['article'=>$article]);
  }
}
