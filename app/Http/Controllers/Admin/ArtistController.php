<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Http\Requests\ArtistRequest;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        // dd($artists);
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $form_data = $request->all();
        $new_artist = new Artist();
        $form_data['slug'] = Artist::generateSlug($form_data['name']);
        $new_artist->fill($form_data);
        $new_artist->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistRequest $request, Artist $artist)
    {
        $form_data = $request->all();

        if($form_data['name'] != $artist->name){
            $form_data['slug'] = Artist::generateSlug($form_data['name']);
        }else{
            $form_data['slug'] = $artist->slug;
        }

        $artist->update($form_data);

        return redirect()->route('admin.artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('admin.artists.index')->with('deleted', "L'artista $artist->name è stato eliminato correttamente");
    }
}
