@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="titlebar">
            <h1>Articles</h1>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        {{--ずらーっと出す--}}
        <div class="timeline">
        @if (!empty($posts) && count($posts) > 0)
            @foreach ($posts as $post)
                <a class="post_card" href="{{route('posts.show',['id' => $post->id]) }}">
                    <div class="post_timestamp">{{$post->created_at}}</div>
                    <div class="post_title">{{$post->title}}</div>
                    <div class="post_description">{{ strip_tags(Str::limit( $post->description,150,'…')) }}</div>
                </a>
            @endforeach
        @else
                <p>No Posts found</p>
            @endif
        </div>
    </div>
@endsection

