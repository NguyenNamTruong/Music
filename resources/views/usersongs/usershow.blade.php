@extends('userlayouts.app')
  
@section('title', 'Show Song')
  
@section('contents')
    <h1 class="mb-0">Detail Song</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $song->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Artist</label>
            <input type="text" name="artist" class="form-control" placeholder="Price" value="{{ $song->artist }}" readonly>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col mb-3">
            <label class="form-label">product_code</label>
            <input type="text" name="song_code" class="form-control" placeholder="Product Code" value="{{ $song->song_code }}" readonly>
        </div> --}}
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                @if ($song->image)
                    <img src="{{ asset('storage/' . $song->image) }}" alt="Song Image" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                @else
                    <p>No image available</p>
                @endif
            </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $song->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $song->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $song->updated_at }}" readonly>
        </div>
    </div>
@endsection