@extends('layouts.master')

@section('content')
<div class="w3-center w3-bottombar card-header">
    <h3>Create Article</h3>
</div>
{!! Form::open(['route' => 'articles.store','method' => 'POST']) !!}
    <div class="w3-card w3-padding">
        <div class="form-group">
            {!! Form::label('title', 'Title',['class' => 'w3-card-2 w3-container w3-round-large']) !!}
            {!! Form::text('title', null , ['class' => 'form-control']) !!}
            @error('title')
                <li class="alert alert-danger">{{ $message }}</li>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Message',['class' => 'w3-card-2 w3-container w3-round-large']) !!}
            {!! Form::textarea('body', null , ['class' => 'form-control']) !!}
            @error('body')
            <li class="alert alert-danger">{{ $message }}</li>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::submit('create', ['class' => 'btn btn-primary w3-card-4']) !!}
        </div>
    </div>
{!! Form::close() !!}

@endsection
