@extends('layouts.app')
@section('content')

    <h1 class="title">
        {{ $post->title }}
    </h1>
    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
    <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <input type="submit" style="display:none">
        <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
    </form>
    <div class="content">
        <div class="content__post">
            <h3>本文</h3>
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    <div class="footer">
        <a href="/posts/create">戻る</a>
    </div>
        <a href="">{{ $post->category->name }}</a>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    <script>
    function deletePost(e) {
        'use strict';
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById('form_delete').submit();
        }
    }
    </script>
@endsection