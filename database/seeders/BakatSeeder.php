<?php

namespace Database\Seeders;

use App\Models\Bakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bakat::create(
            ['nama' => 'Verbal']
        );
        Bakat::create(
            ['nama' => 'Numerik']
        );
        Bakat::create(
            ['nama' => 'Skolastik']
        );
        Bakat::create(
            ['nama' => 'Spasial']
        );
        Bakat::create(
            ['nama' => 'Bahasa']
        );
        Bakat::create(
            ['nama' => 'Abstrak']
        );
    }
}
