<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $topNews = News::orderBy('id', 'desc')->first();

        return view('site.home', compact('topNews'));
    }
}
