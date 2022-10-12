@extends('layouts.app')
@section('content')
    
    {{Auth::user()->name}}
    <h1>Blog Name</h1>
    <p class='create'>[<a href='/posts/create'>create</a>]</p>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                    <a href="">{{ $post->category->name }}</a>
                <p class='body'>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection