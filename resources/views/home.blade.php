@extends('layout')

@section('title','Home')

@section('content')
    @forelse($posts as $post)
        <div class="post-item">
            <div class="post-content">
                <h2><a href="{{ route('posts.show', [$post]) }}"></a>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
            </div>
        </div>
    @endforelse
    @empty
        <h2>There are no posts yet.</h2>
@endsection
