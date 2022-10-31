<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('Pilihans')->insert([
        	'nama' => 'kaos',
        	'gambar' => 'kaos.jpeg',
        ]);

        DB::table('Pilihans')->insert([
            'nama' => 'jaket',
        	'gambar' => 'jaket.jpg',
        ]);
    }
}
