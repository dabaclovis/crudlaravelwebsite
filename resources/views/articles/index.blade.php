@extends('layouts.master')

@section('content')
    <div class=" d-flex justify-content-between w3-bottombar w3-teal">
        <div class=" card-header">
            <h3>Crud Application with laravel Eloquent</h3>
        </div>
        <div class="">
            <a href="{{ route('articles.create') }}" class=" btn btn-primary mt-3 mx-3">Create Article</a>
        </div>
    </div>
    <div class=" py-4">
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <div class=" w3-card mb-1 d-flex justify-content-between">
                    <a href="{{ route('articles.show', $article->id) }}" class=" form-control w3-large"
                        style=" text-decoration:none;">
                        {{ $article->id }}.) &nbsp;{{ Str::ucfirst($article->title) }}
                    </a>
                    <div class=" d-flex">
                        <a href="{{ route('articles.show', $article->id) }}" class="w3-medium mx-1 btn btn-info">Show</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="w3-medium mx-1 btn btn-info">Edit</a>
                        {!! Form::open(['route' => ['articles.destroy',$article->id],'method' => 'post']) !!}
                         {!! Form::hidden('_method','DELETE') !!}
                         {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
            <div class=" d-flex justify-content-center py-1">
                <p>{{ $articles->links() }}</p>
            </div>
        @else
            <p class="p-4 mt-3 w3-center w3-card bg-info text-white">NO article created yet</p>
        @endif
    </div>
@endsection
