@extends('layouts.app')
  
@section('title', 'Home')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Song List</h1>
        <a href="{{ route('songs.create') }}" class="btn btn-primary">Add Song</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Audio</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($song->count() > 0)
                @foreach($song as $song) 
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $song->title }}</td>
                        <td class="align-middle">{{ $song->artist }}</td>
                        <td class="align-middle">
                            
                            <audio controls>
                                <source src="{{ asset('storage/' . $song->audio_path) }}" type="audio/{{ pathinfo($song->audio_path, PATHINFO_EXTENSION) }}">
                                Your browser does not support the audio element.
                            </audio>
                        </td>
                        <td class="align-middle">
                            
                            <img src="{{ asset('storage/' . $song->image) }}" alt="Song Image" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                        </td>
                        </td>
                        <td class="align-middle">
                            
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('songs.show', $song->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('songs.edit', $song->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('songs.destroy', $song->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Song not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection