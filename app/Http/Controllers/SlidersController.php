<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Slider;

class SlidersController extends Controller
{

    public function index()
    {

        $posts = Post::with('category')->get();
        $sliders = Slider::all();

        if(! $sliders){
            $sliders = [];
        }

        return view('welcome', [
           'sliders' => $sliders,
            'posts' => $posts
        ]);
    }
}
