<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EpisodeResource;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index(Request $request)
    {
        $query = $query = Podcast::with('category');
        
        // Filtering
        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }
        
        // Sorting
        if ($request->has('sort')) {
            $sortField = $request->sort;
            $sortDirection = $request->direction ?? 'asc';
            $query->orderBy($sortField, $sortDirection);
        }
        
        $podcasts = $query->paginate(10);
        return PodcastResource::collection($podcasts);
    }

    public function featured()
    {
        $podcasts = Podcast::where('is_featured', true)->limit(5)->get();
        return PodcastResource::collection($podcasts);
    }

    public function show(Podcast $podcast)
    {
        $podcast->load('category');
        return new PodcastResource($podcast);
    }

    public function episodes(Podcast $podcast)
    {
        $episodes = $podcast->episodes()->paginate(10);
        return EpisodeResource::collection($episodes);
    }
}