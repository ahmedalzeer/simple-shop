<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::select('id','title','price')
            ->latest()
            ->paginate(9);
        return view('front.index',compact('posts'));
    }

    public function adsByCategory($id)
    {
        $posts = Post::where('category_id',$id)->get();

        return view('front.bycategory',compact('posts'));
    }

    public function adsDetails($id)
    {
        $post = Post::findOrFail($id);

        return view('front.details',compact('post'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
