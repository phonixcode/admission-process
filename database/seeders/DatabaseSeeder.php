<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\School;
use App\Models\SchoolTag;
use Database\Factories\SchoolFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@imb-app.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            SchoolTagSeeder::class,
            BlogCategorySeeder::class,
            TestimonialSeeder::class,
        ]);

        School::factory(13)->create();
        //Blog::factory(2)->create();
    }
}
