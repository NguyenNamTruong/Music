@extends('layouts.app')
  
@section('title', 'Create Song')
  
@section('contents')
    <h1 class="mb-0">Add Song</h1>
    <hr />
    <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="artist" class="form-control" placeholder="Artist">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="song_code" class="form-control" placeholder="Song Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        </div>
        <!-- File Upload for Audio -->
        <div class="row mb-3">
            <div class="col">
                <label for="audio_path" class="form-label">Audio File</label>
                <input type="file" name="audio_path" class="form-control" accept="audio/*">
            </div>
        </div>

        <!-- File Upload for Image -->
        <div class="row mb-3">
            <div class="col">
                <label for="image" class="form-label">Image File</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
 
        
    </form>
@endsection