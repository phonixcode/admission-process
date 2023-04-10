<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            (object) [
                'title' => 'Tips',
            ],
            (object) [
                'title' => 'News',
            ],
            (object) [
                'title' => 'Event',
            ],
        ];

        foreach ($cats as $cat) {
            BlogCategory::create([
                'title' => $cat->title,
                'slug' => Str::slug($cat->title),
            ]);
        }
    }
}
