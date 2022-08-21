<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run()
    {
        User::create(
            [
                'nama' => 'admin',
                'nim' => '1',
                'email' => 'admin@gmail.com',
                'id_prodi' => '1',
                'id_jurusan' => '1',
                'nohp' => '1',
                'alamat' => 'admin',
                'tgllahir' => '6 juli 2000',
                'jeniskelamin' => 'Laki-laki',
                'isAdmin' => '1',
                'password' => Hash::make('azman123'),
            ]
        );
        User::create(
            [
                'nama' => 'Azman',
                'nim' => '1857301038',
                'email' => 'azman.khairul67@gmail.com',
                'id_prodi' => '1',
                'id_jurusan' => '1',
                'nohp' => '082382898960',
                'alamat' => 'kpjb',
                'tgllahir' => '6 juli 2000',
                'jeniskelamin' => 'Laki-laki',
                'isAdmin' => '0',
                'password' => Hash::make('azman123'),
            ]
        );
    }
    }
}
