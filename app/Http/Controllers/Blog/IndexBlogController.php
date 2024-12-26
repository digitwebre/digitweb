<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexBlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $posts = Blog::all();
        return Inertia::render('Blog', ['posts' => $posts]);
    }
}
