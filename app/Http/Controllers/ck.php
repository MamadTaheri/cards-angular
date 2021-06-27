<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ck extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view('ck',compact(['posts']));
    }
    public function store(Request $request)
    {
       $newpost = new post();
       $newpost->post_title = $request->input('title');
       $newpost->post_content =$request->input('editor');
       $newpost->save();
       return redirect('ck');
    }
}
