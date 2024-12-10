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
                    <div class="post_timestamp">{{ $post->created_at->format('Y-m-d') }}</div>
                    <div class="post_title">{{$post->title}}</div>
                    @php
                        $textOnlyDescription = preg_replace('/<figure[^>]*>.*?<\/figure>\s*/is', '', $post->description);
                    @endphp
                    <div class="post_description">
                        {{ strip_tags(Str::limit($textOnlyDescription, 150, '…')) }}
                    </div>
                </a>
            @endforeach
        @else
                <p>No Posts found</p>
            @endif
        </div>
    </div>
@endsection

