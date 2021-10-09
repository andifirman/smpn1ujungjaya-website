<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $links=[
      [
        'name' => 'Beranda',
        'route' => 'beranda',
        'ordering' => '1',
      ],
      [
        'name' => 'Struktur Organisasi',
        'route' => 'struktur.organisasi',
        'ordering' => '2',
      ],
      [
        'name' => 'Fasilitas',
        'route' => 'fasilitas',
        'ordering' => '3',
      ],
      [
        'name' => 'Ekstrakurikuler',
        'route' => 'ekstrakurikuler',
        'ordering' => '4',
      ],
      [
        'name' => 'Masuk',
        'route' => 'masuk',
        'ordering' => '5',
      ]
    ];

    foreach($links as $key => $navbar){
      Navbar::create($navbar);
    }

  }
}
