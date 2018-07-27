<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorysTableSeeder extends Seeder
{
    public function run()
    {
        $faker = app(Faker\Generator::class);

        $categorys = factory(Category::class)->times(5)->make()->each(function ($category, $index) {
            if ($index == 0) {
                // $category->field = 'value';
            }
        });

        Category::insert($categorys->toArray());
    }

}

