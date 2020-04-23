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


     public function create(){

        return view('articles.create');

    }

    public function show($id){

       $article= Article::find($id); 

       return view('articles.show',["article"=>$article]);
    }


    
    public function store(){

        // dump(request()->all());

        $article=new Article();
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        
        $article->save();

        return redirect('/');


    }

    public function edit(){
        
    }
    public function update(){
        
    } 
 
    public function destroy(){
        
    }
}
