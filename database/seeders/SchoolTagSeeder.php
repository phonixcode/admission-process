<?php

namespace Database\Seeders;

use App\Models\SchoolTag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SchoolTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            (object) [
                'title' => 'Malta',
            ],
            (object) [
                'title' => 'United Kingdom',
            ],
            (object) [
                'title' => 'Nigeria',
            ],
            (object) [
                'title' => 'South Africa',
            ],
            (object) [
                'title' => 'Ghana',
            ],
            (object) [
                'title' => 'Italy',
            ],
            (object) [
                'title' => 'France',
            ],
            (object) [
                'title' => 'USA',
            ],
        ];

        foreach ($tags as $tag) {
            SchoolTag::create([
                'title' => $tag->title,
                'slug' => Str::slug($tag->title),
            ]);
        }
    }
}
