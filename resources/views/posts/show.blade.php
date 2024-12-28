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
            <div class="show_timestamp">{{ $post->created_at->format('Y-m-d') }}</div>
            <div class="show_description">{!! html_entity_decode($post->description) !!}</div>
        </div>

    </div>

@endsection
