<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    
    public function index()
    {
        $media = Media::all();
        return view('media.index', compact('media'));
    }
    
    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('media.show', compact('media'));
    }
    
    public function search(Request $request)
    {
        $media = Media::where('title', 'like', '%'.$request->search.'%')->get();
        return view('media.index', compact('media'));
    }
    
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
