<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicRequest; 
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
    
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ComicRequest;   $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {

        // Validate i dati inseriti
        // $validate_data = $request->validate([
        //     'title' => 'required|min:3|max:255',
        //     'description' => 'required|min:3|max:255',
        //     'thumb' => 'required|min:3|max:255',
        //     'price' => 'required|min:3|max:255',
        //     'series' => 'required|min:3|max:255',
        //     'sale_date' => 'required|min:3|max:255',
        //     'type' => 'nullable|min:3|max:255',
        //     ]);
       
        $validated = $request->validated();
        Comic::create($validated);
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ComicRequest  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {

        // dd($request->all());
        // $data = $request->all();


        // $validate_data = $request->validate([
        //     'title' => 'required|min:3|max:255',
        //     'description' => 'required|min:3|max:255',
        //     'thumb' => 'required|min:3|max:255',
        //     'price' => 'required|min:3|max:255',
        //     'series' => 'required|min:3|max:255',
        //     'sale_date' => 'required|min:3|max:255',
        //     'type' => 'nullable|min:3|max:255',
        //     ]);
            
        // $comic->update($validate_data);
        
        //validare i dari
        $validated = $request->validated();

        $comic->update($validated);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
