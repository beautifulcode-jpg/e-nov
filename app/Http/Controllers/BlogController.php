<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use Auth;

class BlogController extends Controller
{
    public function showFeaturedArticles()
    {
        //select featured articles
        $featured_articles = Article::where('featured', '1')->latest()->get();
        return view('blog', compact('featured_articles'));
    }

    public function showArticles(string $category)
    {
        //select articles by category
        $articles = Article::where('category', $category)->with('author')->latest()->simplePaginate(5);
        return view('article.list', compact('articles'));
    }

    public function showArticle($id)
    {
        //select article by id
        $article = Article::where('id', $id)->with('author','comments')->first();
        return view('article.show', compact('article'));
    }
    public function addArticle()
    {
        $article = new Article;
        return view('article.form', compact('article'));
    }
    public function createArticle(Request $request)
    {
        $article = Article::create([
            'category' => request('category'),
            'title' => request('title'),
            'body' =>  request('body'),
            'pathtoimage' => request('pathtoimage'),
            'author_id' => Auth::guard('writer')->user()->id,
            'slug' => str_replace(" ","-",request('title')),
            'featured' => 0,
        ]);
        return redirect("/blog/article/$article->id");
    }
    public function editArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $edit = true;
        return view('article.form', compact('edit','article'));
    }
    public function storeArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $article->title = request('title');
        $article->body = request('body');
        $article->category = request('category');
        $article->pathtoimage = request('pathtoimage');
        $article->save();
        return redirect("/blog/article/$article->id");
    }
    public function deleteArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $comments = Comment::where('article_id',$id)->get();
        foreach ($comments as $comment)
        {
            $comment->delete();
        }
        $article->delete();
        return redirect("/blog");
    }
}
