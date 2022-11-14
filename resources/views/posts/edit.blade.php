@extends('layouts.master')

@section('content')
    <div class=" w3-bottombar card-header w3-center w3-teal">
        <h2>Create Post</h2>
    </div>
    <div class="w3-card-4 p-2">
        {!! Form::open(['route' => ['posts.update',$post->id],'method' => 'post']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title" class=" w3-card p-1">Heading:</label>
                <input type="text" name="title" value="{{ $post->heading }}" class="form-control">
                @error('title')
                    <li class=" alert alert-danger" style=" list-style:none;">{{ $message }}</li>
                @enderror
            </div>
            <div class="form-group">
                <label for="body" class=" w3-card p-1">Message:</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
                @error('body')
                    <li class=" alert alert-danger" style=" list-style:none;">{{ $message }}</li>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ route('posts.show',$post->id) }}" class=" btn btn-danger">cancel</a>
                <button type="submit" class="btn btn-primary w3-card-2 w3-right">Update</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
