<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'audio_url' => $this->audio_url,
            'duration' => $this->duration,
            'published_at' => $this->published_at,
            'podcast' => [
                'id' => $this->podcast->id,
                'title' => $this->podcast->title,
                'slug' => $this->podcast->slug,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}