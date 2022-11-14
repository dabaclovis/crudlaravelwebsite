@extends('layouts.master')

@section('content')
    <div class=" d-flex justify-content-between w3-bottombar">
        <div class="">
            <h2>{{ Str::ucfirst($article->title) }}</h2>
        </div>
        <div class="">
            <small>{{ $article->created_at->diffForHumans() }}</small>
        </div>
    </div>
    <div class=" w3-container w3-large py-1">
        <p>{{ Str::ucfirst($article->body) }}</p>
    </div>
    <div class="w3-bar">
        <a href="{{ route('articles.index') }}" class=" btn btn-primary"><small>Go back</small></a>
        <a href="{{ route('articles.edit',$article->id) }}" class=" btn btn-primary w3-right"><small>Edit</small></a>
    </div>
@endsection
