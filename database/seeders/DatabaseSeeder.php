<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Island;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Contact::factory(10)->create();
    }
}
