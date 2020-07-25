<?php

use Illuminate\Database\Seeder;
use\App\Berita;
class beritaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 9; $i++) { 
            $data = Berita::create([
                'nama'=>"Berita. $i",
                'gambar'=>"Gambar Berita. $i",
                'kategori'=>"Berita Pendidikan. $i",
                'deskripsi'=>"akibat pendemi berpengaruh terhadap pendidikan. $i",

            ]);
        }
    }
}
