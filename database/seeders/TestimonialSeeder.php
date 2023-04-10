<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            (object) [
                'name' => 'Alex Gibson',
                'school' => 'STC',
                'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                voluptatum',
                'photo' => '1.jpg',
            ],
            (object) [
                'name' => 'Alex John',
                'school' => 'UOM',
                'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                voluptatum',
                'photo' => '2.jpg',
            ],
        ];

        foreach ($testimonials as $item) {
            Testimonial::create([
                'name' => $item->name,
                'school' => $item->school,
                'quote' => $item->quote,
                'photo' => $item->photo,
            ]);
        }
    }
}
