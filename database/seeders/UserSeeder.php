<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Ortu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = Guru::all();
        $ortu = Ortu::all();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'roles' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@mail.com',
            'password' => Hash::make('john123'),
            'roles' => 'guru',
            'nip' => '1234567890',
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Roe',
            'email' => 'jane@mail.com',
            'password' => Hash::make('jane123'),
            'roles' => 'guru',
            'nip' => '0987654321',
        ]);

        DB::table('users')->insert([
            'name' => 'James Alexander',
            'email' => 'james@mail.com',
            'password' => Hash::make('james123'),
            'roles' => 'ortu',
            'ortu_id' => '001',
        ]);

        DB::table('users')->insert([
            'name' => 'Sophia Grace',
            'email' => 'sophia@mail.com',
            'password' => Hash::make('sophia123'),
            'roles' => 'ortu',
            'ortu_id' => '002',
        ]);

        // update user_id to guru table as user id
        foreach ($guru as $g) {
            DB::table('gurus')->where('nip', $g->nip)->update([
                'user_id' => DB::table('users')->where('nip', $g->nip)->first()->id
            ]);
        }

        // update user_id to ortu table as user id
        foreach ($ortu as $s) {
            DB::table('ortus')->where('ortu_id', $s->ortu_id)->update([
                'user_id' => DB::table('users')->where('ortu_id', $s->ortu_id)->first()->id
            ]);
        }
    }
}
