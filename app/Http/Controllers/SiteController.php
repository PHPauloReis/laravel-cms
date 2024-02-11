<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $topNews = News::orderBy('id', 'desc')->first();
        $news = News::orderBy('id', 'desc')->skip(1)->limit(6)->get();

        return view('site.home', compact('topNews', 'news'));
    }

    public function read(News $news)
    {
        return view('site.read', compact('news'));
    }

    public function news()
    {
        $news = News::orderBy('id', 'desc')->get();

        return view('site.news', compact('news'));
    }

    public function newsCategory($token)
    {
        $category = Category::where('token', $token)->first();

        $news = News::orderBy('id', 'desc')->where('category_id', $category->id)->get();

        return view('site.news', compact('news'));
    }
}
