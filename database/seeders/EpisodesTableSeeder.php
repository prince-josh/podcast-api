<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    public function run()
    {
        // Get all podcasts
        $podcasts = Podcast::all();

        // Create 5-10 episodes for each podcast
        $podcasts->each(function ($podcast) {
            $episodes = [
                [
                    'title' => 'Introduction to ' . $podcast->title,
                    'description' => 'This is the first episode where we introduce the podcast',
                    'audio_url' => 'https://example.com/audio/' . $podcast->slug . '-ep1.mp3',
                    'duration' => 1800, // 30 minutes in seconds
                    'published_at' => now()->subDays(10),
                ],
                [
                    'title' => 'Deep Dive: ' . $podcast->title,
                    'description' => 'In this episode we take a deeper look at our topic',
                    'audio_url' => 'https://example.com/audio/' . $podcast->slug . '-ep2.mp3',
                    'duration' => 2700, // 45 minutes in seconds
                    'published_at' => now()->subDays(7),
                ],
                [
                    'title' => 'Special Guest on ' . $podcast->title,
                    'description' => 'We interview a special guest about our topic',
                    'audio_url' => 'https://example.com/audio/' . $podcast->slug . '-ep3.mp3',
                    'duration' => 3600, // 60 minutes in seconds
                    'published_at' => now()->subDays(4),
                ],
                [
                    'title' => 'Q&A Session for ' . $podcast->title,
                    'description' => 'We answer listener questions about our topic',
                    'audio_url' => 'https://example.com/audio/' . $podcast->slug . '-ep4.mp3',
                    'duration' => 2400, // 40 minutes in seconds
                    'published_at' => now()->subDays(2),
                ],
                [
                    'title' => 'Latest Updates on ' . $podcast->title,
                    'description' => 'We discuss the latest news and updates about our topic',
                    'audio_url' => 'https://example.com/audio/' . $podcast->slug . '-ep5.mp3',
                    'duration' => 2100, // 35 minutes in seconds
                    'published_at' => now(),
                ],
            ];

            foreach ($episodes as $episode) {
                Episode::create(array_merge($episode, [
                    'podcast_id' => $podcast->id
                ]));
            }
        });
    }
}