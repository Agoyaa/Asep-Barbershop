<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\SubTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('subTitles')->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $news = News::create($request->only(['title', 'content']));

        foreach ($request->sub_titles as $index => $subTitle) {
            $path = $request->file('images')[$index]->store('sub_titles');
            SubTitle::create([
                'news_id' => $news->id,
                'sub_title' => $subTitle,
                'image_path' => $path
            ]);
        }

        return redirect()->route('news.index');
    }
}
