<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\factorys\Factory;
use Database\Factories\AuthorFactory;
use App\Models\Author;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(50)->create();
    }
}
