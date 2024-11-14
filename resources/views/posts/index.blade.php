@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="titlebar">
{{--            <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>--}}
            <h1>Articles</h1>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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

