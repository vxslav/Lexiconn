<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::orderBy('id', 'desc')->get();

        return view('articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = Auth::user()->id;
        $article = new Article;
        $article->user_id = $author;

        return view('create-article', compact('author', 'article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'heading' => 'required|string',
             'text'    => 'required|string|',

        ]);

        $article = new Article;

        $article->heading = $request->heading;
        $article->text    = $request->text;
        $article->author  = Auth::user()->name;
        $article->user_id = Auth::user()->id;

        $article->save();

        return redirect('/articles')->with('message', 'You have successfully created an article!');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        
        return view('article-show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('update-article', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'heading' => 'string|required',
            'text'    => 'string|required',

        ]);

        $article = Article::find($id);
        $article->heading = $request->input('heading');
        $article->text    = $request->input('text');

        $article->save();

        return redirect('/articles')->with('message', 'You have successfully updated your article!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/articles')->with('message', 'You have successfully deleted an article!');
    }
}
