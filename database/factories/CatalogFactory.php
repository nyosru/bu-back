<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Catalog;

class CatalogFactory extends Factory
{

    protected $model = Catalog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ar = [
            'name' => $this->faker->name(),
            //->comment('название');
            // 'up_catalogs_id' => rand(0,10)
            // ->comment('верхний каталог если есть');
            // $table->enum('show', ['on', 'off'])
            // ->default('on')
            // ->comment('видим невидим');
        ];

        if (rand(1, 3) == 3) {
            $ar['up_catalogs_id'] = rand(1, 20);
        }

        return $ar;
    }
}
