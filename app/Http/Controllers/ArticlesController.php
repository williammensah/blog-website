<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
    //

    public function index()
    {
       $articles = Article::latest()->get();

       return view('articles.index',['articles' =>$articles]);
    }

        public function show(Article $article)
        {
       
         return view('articles.show',['article'=> $article]);

        }
          public function create()
          {
              //show a view to create
              return view('articles.create');
          }
             

          public function store(Request $request)
           {
             Article::create($this->validatedArticles());
             
        

             return redirect(route('/articles.index'));

           }
           public function edit(Article $article)
          {
              
              //find article 
              return view('articles.edit',['article'=>$article]);
          }

          public function update(Article $article)
          {
           
                Article::update($this->validatedArticles());
                  
             
           return redirect($article->path());

          }

          protected function validatedArticles()
          {
            return  request()->validate([
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
                ]);
          }
}
