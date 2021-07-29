<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Topi',
            'gambar' => 'topi.jpg'
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'T-Shirt',
            'gambar' => 'kaos.jpg'
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Hoddie',
            'gambar' => 'hoddie.jpg'
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Crewneck',
            'gambar' => 'crewneck.jpg'
        ]);
    }
}
