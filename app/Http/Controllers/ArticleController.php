<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function addComment(Request $request)
    {
        $id = request('article_id');
        Comment::create([
			'name' => request('name'),
			'profile_id' => request('profile_id'),
			'article_id' => request('article_id'),
			'body' => request('body')
		]);
        return redirect("/blog/article/$id");
    }
}
