<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $articles = [
            [
                'title'=>' My first Product',
                'content'=>' Vazio 1'
            ],
            [
                'title'=>' My second Product',
                'content'=>' Vazio 2'
            ],
            [
                'title'=>' My third Product',
                'content'=>' Vazio 3'
            ],
        ];


        return view('home',[
            'articles' => $articles,
            //'articles' => Post::all()
        ]);
    }

    public function show($id)
    {
        return view('article',[
            'article' => Post::find($id) ,
        ]);
    }
}
