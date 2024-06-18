<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Emma Johnson',
            'nis' => '123454321',
            'kelas_id' => 1,
            'kebutuhan_khusus' => 'Down Syndrome',
            'alamat' => 'Jl. Sidoarjo',
        ]);

        DB::table('siswas')->insert([
            'nama' => 'Oliver Smith',
            'nis' => '543212345',
            'kelas_id' => 2,
            'kebutuhan_khusus' => 'Autisme',
            'alamat' => 'Jl. Bandung',
        ]);
    }
}
