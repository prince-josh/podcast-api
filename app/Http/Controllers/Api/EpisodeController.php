<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EpisodeResource;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function show(Episode $episode)
    {
        $episode->load('podcast');
        return new EpisodeResource($episode);
    }
}