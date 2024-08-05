<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Category;

class EventSeeder extends Seeder
{
    public function run()
    {
        $category1 = Category::where('name', 'Conferences')->first();
        $category2 = Category::where('name', 'Workshops')->first();

        Event::create([
            'title' => 'Tech Conference 2024',
            'description' => 'A conference about the latest in technology.',
            'date_time' => '2024-10-10',
            'location' => 'Convention Center, City A',
            'category_id' => $category1->id
        ]);

        Event::create([
            'title' => 'AI Workshop',
            'description' => 'A hands-on workshop about artificial intelligence.',
            'date_time' => '2024-11-05',
            'location' => 'Workshop Room, City B',
            'category_id' => $category2->id
        ]);
    }
}
