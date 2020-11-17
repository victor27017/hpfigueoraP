<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $themes = Theme::latest()->paginate(5);
  
        return view('themes.index',compact('themes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('themes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title_theme' => 'required',
            'description' => 'required',
        ]);
  
        Theme::create($request->all());
   
        return redirect()->route('themes.index')
                        ->with('success','Theme created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        //
        return view('themes.show',compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        //
        return view('themes.edit',compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        //
        $request->validate([
            'title_theme' => 'required',
            'description' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('themes.index')
                        ->with('success','Theme updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        //
        $theme->delete();
  
        return redirect()->route('themes.index')
                        ->with('success','Theme deleted successfully');
    }
}
