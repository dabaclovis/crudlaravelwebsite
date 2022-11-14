@extends('layouts.master')

@section('content')
    <div class=" d-flex justify-content-between w3-bottombar w3-teal">
        <div class=" card-header">
            <h2>Querry Builder CRUD LARAVEL application</h2>
        </div>
        <div class=" mx-3 py-4">
            <a href="{{ route('posts.create') }}" class=" btn btn-primary ">Create Post</a>
        </div>
    </div>
    <div class="">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="d-flex justify-content-between form-group mb-1 mt-2 w3-card w3-padding">
                        <a href="{{ route('posts.show',$post->id) }}" class="w3-large">{{ Str::ucfirst($post->heading) }}</a>
                    <div class=" py-1 d-flex">
                        <a href="{{ route('posts.show',$post->id) }}" class="w3-small btn btn-info mx-1">show</a>
                        <a href="{{ route('posts.edit',$post->id) }}" class="w3-small btn btn-primary mx-1">Edit</a>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <p class="p-4 mt-3 w3-center w3-card bg-info text-white">No Post Created</p>
        @endif
    </div>
@endsection
