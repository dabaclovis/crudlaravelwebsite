@extends('layouts.master')

@section('content')
    <div class=" d-flex justify-content-between w3-bottombar">
        <div class=" card-header">
            <h2>Querry Builder CRUD LARAVEL application</h2>
        </div>
        <div>
            <a href="{{ route('posts.create') }}" class=" btn btn-primary ">Create Post</a>
        </div>
    </div>
@endsection
