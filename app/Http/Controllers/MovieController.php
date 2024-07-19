<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('movies.index', compact('categories'));
    }

    public function showByGenre($genre)
    {
        $category = Category::where('name', $genre)->first();
        if (!$category) {
            return view('movies.error');
        }

        $movies = Movie::where('category_id', $category->id)->get();
        return view('movies.genre', compact('genre', 'movies'));
    }
}
