<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PodcastResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('podcasts')->get();
        return CategoryResource::collection($categories);
    }

    public function podcasts(Category $category)
    {
        $podcasts = $category->podcasts()->paginate(10);
        return PodcastResource::collection($podcasts);
    }
}