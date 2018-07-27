<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $tags = factory(Tag::class)->times(10)->make()->each(function ($tag, $index) {

        });

        Tag::insert($tags->toArray());
    }

}

