<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //I want to perform Read Operation
        //1. QueryBuilder

        //2. Eleqoent ORM (Object Relatinal Mapper)
        $news = News::orderBy('created_at', 'desc')->get();

        return view('news.index',compact('news'));
    }

    /**
     * Show the add form for creating a new resource.
     */
    public function create()
    {
        //

        return view('news.create');

    }

    /**
     * Store a newly created resource/data in storage = Database.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // I want to insert record
        //1. QueryBuilder
        //2. Eleqoent ORM (Object Relatinal Mapper)
        News::create($request->all()); //Create method is used for inserting single record
        return redirect()->route('news.create')->with('success','News created successfully.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
        return 'show';
    }

    /**
     * Show the edit form for editing the specified resource.
     */
    public function edit(News $news)
    {
        
        // READ operation
        //Equoquent 
        $news = News::find($news->id);
        //dd($news->title);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //dd($news->id);
        //I want to update the record using Eleqouent
        News::where('id', $news->id)->update($request->only(['title', 'description', 'image_url']));
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
