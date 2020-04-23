<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //

    public function index(){

        $articles= Article::all(); 
 
        return view('articles.index',["articles"=>$articles]);
     }



    public function show($id){

       $article= Article::find($id); 

       return view('articles.show',["article"=>$article]);
    }
}
