<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(JurusanSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(Userseeder::class);
        $this->call(BakatSeeder::class);
    }
}
