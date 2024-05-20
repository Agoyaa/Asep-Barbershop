<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('subTitles')->get();
        return view('news.index', compact('news'), [
            'title' => 'news'
        ]);
    }

    public function create()
    {
        return view('news.create', [
            'title' => 'Create News'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'bg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'sub_titles' => 'array',
            'sub_titles.*.sub_title' => 'required|string|max:255',
            'sub_titles.*.image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sub_titles.*.desc' => 'required|string|max:255',
        ]);

        $bgPath = $request->file('bg')->store('images', 'public');

        $news = News::create([
            'title' => $request->title,
            'bg' => $bgPath,
            'content' => $request->content,
        ]);

        foreach ($request->sub_titles as $subTitle) {
            $path = $subTitle['image']->store('images', 'public');
            $news->subTitles()->create([
                'sub_title' => $subTitle['sub_title'],
                'image_path' => $path,
                'desc' => $subTitle['desc']
            ]);
        }

        return redirect()->route('news.create')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function show($id)
    {
        $news = News::with('subTitles')->findOrFail($id);
        return view('news.show', compact('news'), [
            'title' => 'single'
        ]);
    }
}
