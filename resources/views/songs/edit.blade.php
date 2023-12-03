@extends('layouts.app')
  
@section('title', 'Edit Song')
  
@section('contents')
    <h1 class="mb-0">Edit Song</h1>
    <hr />
    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $song->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Artist</label>
                <input type="text" name="artist" class="form-control" placeholder="Artist" value="{{ $song->artist }}" >
            </div>
        </div>
        {{-- <div class="row">
            <div class="col mb-3">
                <label class="form-label">Song Code</label>
                <input type="text" name="Song_code" class="form-control" placeholder="Song Code" value="{{ $song->song_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $song->description }}</textarea>
            </div> --}}
            {{-- <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="col mb-3">
                    <label class="form-label">Audio File</label>
                    <input type="file" name="audio_path" class="form-control-file">
                </div> --}}
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection