<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    public function run()
    {
        $podcasts = [
            [
                'category_id' => 1,
                'title' => 'Tech Today',
                'slug' => 'tech-today',
                'description' => 'Daily tech news and updates from around the world',
                'image_url' => 'https://example.com/images/tech-today.jpg',
                'is_featured' => true,
            ],
            [
                'category_id' => 1,
                'title' => 'Code Chronicles',
                'slug' => 'code-chronicles',
                'description' => 'Stories from software developers and their coding journeys',
                'image_url' => 'https://example.com/images/code-chronicles.jpg',
                'is_featured' => false,
            ],
            [
                'category_id' => 2,
                'title' => 'Business Insights',
                'slug' => 'business-insights',
                'description' => 'Expert analysis of business trends and strategies',
                'image_url' => 'https://example.com/images/business-insights.jpg',
                'is_featured' => true,
            ],
            [
                'category_id' => 3,
                'title' => 'Science Weekly',
                'slug' => 'science-weekly',
                'description' => 'Breaking down the latest scientific discoveries',
                'image_url' => 'https://example.com/images/science-weekly.jpg',
                'is_featured' => false,
            ],
            [
                'category_id' => 4,
                'title' => 'Health Matters',
                'slug' => 'health-matters',
                'description' => 'Expert advice on physical and mental wellbeing',
                'image_url' => 'https://example.com/images/health-matters.jpg',
                'is_featured' => true,
            ],
            [
                'category_id' => 5,
                'title' => 'Entertainment Now',
                'slug' => 'entertainment-now',
                'description' => 'The latest in movies, TV, and pop culture',
                'image_url' => 'https://example.com/images/entertainment-now.jpg',
                'is_featured' => false,
            ],
        ];

        foreach ($podcasts as $podcast) {
            Podcast::create($podcast);
        }
    }
}