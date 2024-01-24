<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $models = Post::all();
        return view('test.index', compact('models'));
    }
    public function about()
    {
        return view('test.about');
    }
    public function contact()
    {
        return view('test.contact');
    }
    public function blog()
    {
        return view('test.blog');
    }
    public function servis()
    {
        return view('test.servis');
    }
    public function shop()
    {
        return view('test.shop');
    }
}
