@extends('layouts.master')

@section('content')
    <div class=" d-flex justify-content-between w3-bottombar">
        <div class="">
            <h3>Crud Application with laravel Eloquent</h3>
        </div>
        <div class="">
            <a href="{{ route('articles.create') }}" class=" btn btn-primary">Create Article</a>
        </div>
    </div>
    <div class=" py-4">
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <div class=" w3-card mb-1">
                    <a href="{{ route('articles.show', $article->id) }}" class=" form-control w3-large" style=" text-decoration:none;">
                        {{ $article->id }}.) &nbsp;{{ Str::ucfirst($article->title) }}
                    </a>
                </div>
            @endforeach
        @else
            <p>NO article created yet</p>
        @endif
    </div>
@endsection
