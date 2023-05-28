<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;
    private $category;

    public function __construct(News $news, Category $category)
    {
        $this->news = $news;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = $this->news->orderBy('id', 'desc')->paginate(10);

        return view("admin.news.index", compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->all();

        return view("admin.news.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $file = $request->file('cover');
        $file->store('news');

        $data = $request->all();
        $data['cover'] = $file->hashName();

        $this->news->create($data);

        session()->flash("success", "O registro foi gravado com sucesso!");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = $this->category->all();

        return view("admin.news.edit", compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());

        session()->flash("success", "O registro foi atualizado com sucesso!");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        session()->flash("success", "O registro foi deletado com sucesso!");

        return redirect()->back();
    }
}
