<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology', 'description' => 'Tech podcasts'],
            ['name' => 'Business', 'slug' => 'business', 'description' => 'Business podcasts'],
            ['name' => 'Science', 'slug' => 'science', 'description' => 'Science podcasts'],
            ['name' => 'Health', 'slug' => 'health', 'description' => 'Health podcasts'],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'description' => 'Entertainment podcasts'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}