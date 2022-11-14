@extends('layouts.master')

@section('content')
<div class="w3-center w3-bottombar card-header">
    <h3>Update Article</h3>
</div>
{!! Form::open(['route' => ['articles.update',$article->id],'method' => 'POST']) !!}
    <div class="w3-card w3-padding">
        <div class="form-group">
            {!! Form::label('title', 'Title',['class' => 'w3-card-2 w3-container w3-round-large']) !!}
            {!! Form::text('title', $article->title , ['class' => 'form-control w3-large']) !!}
            @error('title')
                <li class="alert alert-danger">{{ $message }}</li>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Message',['class' => 'w3-card-2 w3-container w3-round-large']) !!}
            {!! Form::textarea('body', $article->body , ['class' => 'form-control w3-large']) !!}
            @error('body')
            <li class="alert alert-danger">{{ $message }}</li>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary w3-card-4']) !!}
        </div>
    </div>
    @method('PUT')
{!! Form::close() !!}

@endsection

