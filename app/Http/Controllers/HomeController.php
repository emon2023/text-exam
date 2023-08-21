<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $blog, $blogs,$categories;

    public function index()
    {
        $this->categories = Category::all();
        $this->blogs = Blog::all();
        return view('home.home',['blogs'=>$this->blogs,'categories'=>$this->categories]);
    }

    public function category($id)
    {
        $this->categories = Category::all();
        $this->blogs = Blog::where('category_id', $id)->get();
        return view('home.category', ['blogs' => $this->blogs,'categories'=>$this->categories]);
    }



}
