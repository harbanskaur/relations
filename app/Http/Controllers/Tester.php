<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Http\Request;

class Tester extends Controller
{
    public function index()
    {
        // $user = User::first();
        $user = User::with('contact')->first();
        // return $user->all();
       dd ($user->toArray());
    }
    public function posts()
    {
        // $user = User::first();
        $posts = User::with('contact','posts')->get();
        return $posts->all();
    //    dd ($user->toArray());
    }
    public function category()
    {
        // $user = User::first();
        $categories = Category::all();
        $posts = Posts::with('categories')->first();
         $posts->categories()->attach($categories);
        // return  $categories->all();
       dd ($categories->toArray());
    }
}