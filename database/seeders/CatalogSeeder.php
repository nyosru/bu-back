<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Catalog;
use Database\Factories\CatalogFactory;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalog::factory()
            ->count(150)
            ->create();
    }
}
