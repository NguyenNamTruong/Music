<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $song = Song::orderBy('created_at', 'DESC')->get();

        return view('usersongs.index', compact('song'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usersongs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'audio_path' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav', // Adjust the audio file validation rules
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image file validation rules
        ]);

        // Process and store the uploaded audio file
        $audioFile = $request->file('audio_path');
        $audioFileName = time().'.'.$audioFile->extension();
        $audioPath = $audioFile->storeAs('audio_path', $audioFileName, 'public');

        // Process and store the uploaded image file
        $imageFile = $request->file('image');
        $imageFileName = time().'.'.$imageFile->extension();
        $imagePath = $imageFile->storeAs('images', $imageFileName, 'public');

        // Create a new Song record with the uploaded files
        $data = [
            'title' => $request['title'],
            'artist' => $request['artist'],
            'song_code' => $request['song_code'],
            'description' => $request['description'],
            'audio_path' => $audioPath,
            'image' => $imagePath,
        ];

        Song::create($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::findOrFail($id);

        return view('usersongs.usershow', compact('song'));
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
