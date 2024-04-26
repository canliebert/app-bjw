<?php

namespace App\Http\Controllers;
use App\Models\News;use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     */
    public function front()
    {
        return view('parts.news', [
            'title' => 'News',
            'news' => News::latest()->get()
        ]);
    }

    public function index()
    {   
        if (!auth()->check() || !auth()->user()->is_admin) {
            return abort(403);
        }
            return view('dashboard.news.Index', [
            "title" => "News",
            "news"  => News::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create', [
            "title" => "News",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'body' => 'required',
            'img' => 'image|file|max:5116'
        ]);

        $validatedData['subtitle']=  Str::limit(strip_tags($request->body), 20);


        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('news-images');
        }
        
        News::create($validatedData);

        return redirect('dashboard/news')->with('success', 'New mad has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('dashboard.news.show', [
            'title' => 'News',
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            "title" => "News",
            "news"  => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'body' => 'required',
            'img' => 'image|file|max:5116'
        ]);

        $validatedData['subtitle']=  Str::limit(strip_tags($request->body), 20);

        if ($request->file('img')) {
            $oldImagePath = $news->img; 
            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:5116'
            ]);
            $validatedData['img'] = $request->file('img')->store('event-images');
        
            if ($oldImagePath && Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }
        }
        
        News::where('id', $news->id)->update($validatedData);

        return redirect('dashboard/news')->with('success', 'New mad has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);

        return redirect('dashboard/news')->with('success', 'New post has been deleted!');
    }
}
