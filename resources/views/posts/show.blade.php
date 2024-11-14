@extends('layouts.app')
@section('content')
    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="show_container">
            <div class="show_title">{{ $post->title }}</div>
            <div class="show_timestamp">{{ $post->created_at }}</div>
            <div class="show_description">{!! html_entity_decode($post->description) !!}</div>
            {{--文章で画像もいっしょにやりたい--}}
            @if ($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
        </div>

    </div>

@endsection
