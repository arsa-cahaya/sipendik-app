<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ortuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ortus')->insert([
            'nama' => 'James Alexander',
            'ortu_id' => '001',
            'siswa_id' => 1,
            'no_telp' => '082123456789',
            'alamat' => 'Jl. Bogor',
        ]);

        DB::table('ortus')->insert([
            'nama' => 'Sophia Grace',
            'ortu_id' => '002',
            'siswa_id' => 2,
            'no_telp' => '083856781234',
            'alamat' => 'Jl. Ponorogo',
        ]);
    }
}
