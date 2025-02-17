<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Conferences']);
        Category::create(['name' => 'Workshops']);
        Category::create(['name' => 'Meetups']);
    }
}
