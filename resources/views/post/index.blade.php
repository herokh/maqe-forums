@extends('master')

@section('content')
    @foreach ($posts as $post)
        <div class="post">
            <div class="post-image">
                <img src="{{ $post->image_url }}" />
            </div>
            <div class="post-content">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <span>{{ $post->created_at_readable }}</span>
            </div>
            @if ($post->author)
            <div class="author">
                <div class="author-image">
                    <img src="{{ $post->author->avatar_url }}" />
                </div>
                <div class="author-info">
                    <span class="author-name">{{ $post->author->name }}</span>
                    <span class="author-role">{{ $post->author->role }}</span>
                    <span class="author-city">{{ $post->author->place }}</span>
                </div>
            </div>
            @endif
        </div>
    @endforeach
@endsection
