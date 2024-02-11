<?php

namespace App\Http\Controllers;

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
}
