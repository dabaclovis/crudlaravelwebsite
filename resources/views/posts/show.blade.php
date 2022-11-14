@extends('layouts.master')

@section('content')
    <div class=" w3-card-2 w3-container">
        <h2 class=" w3-bottombar card-header">{{ Str::ucfirst($post->heading) }}</h2>
        <p class="w3-sans-serif w3-large mt-2">{{ Str::ucfirst($post->body) }}</p>
        <div class=" w3-topbar p-2">
            <a href="{{ route('posts.index') }}" class=" btn btn-secondary">go back</a>
            <a href="{{ route('posts.edit',$post->id) }}" class=" w3-right btn btn-success">Edit</a>
        </div>
    </div>

@endsection
