<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog, $blogs, $categories;

    public function index()
    {
       // $this->categories = Category::all();
        return view('blog.add',['categories'=>Category::all()]);
    }

    public function create(Request $request)
    {
        $this->categories = Category::all();
        Blog::newBlog($request);
        return back()->with('message','Blog Info Create Successfully');
    }

    public function manage()
    {
        $this->categories = Category::all();
        $this->blogs = Blog::all();
        return view('blog.manage',['blogs'=> $this->blogs,'categories'=>$this->categories]);
    }

    public function edit($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('blog.edit',['blog'=> $this->blog,'categories'=>$this->categories]);
    }

    public function update(Request $request, $id)
    {
        $this->categories = Category::all();
        Blog::updateBlog($request, $id);
        return redirect('/blog/manage')->with('message','Blog Info Update Successfully');
    }

    public  function delete($id)
    {
        $this->categories = Category::all();
        Blog::deleteBlog($id);
        return back()->with('message','Blog Info Delete Successfully');
    }


}
