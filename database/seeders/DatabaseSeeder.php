<?php

namespace Database\Seeders;

use App\Models\Article_tag;
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
        $rows_to_add_count = 100;
        Article_tag::factory($rows_to_add_count)->create();
    }
}

