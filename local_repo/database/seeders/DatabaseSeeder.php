<?php

namespace Database\Seeders;

use App\Models\Student;
use Database\Seeders\Student as SeedersStudent;
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
        Student::factory()->count(15)->create();
        // $this->call([
        //     StudentSeeder::class
        // ]);
    }
}
