@extends('layout')

@section('title', 'Update post '.$post->title )

@section('content')
    <h1>Update Post {{ $post->title }}</h1>
    <form method="POST" action="{{ route('posts.update', [$post]) }}">
        @csrf
        @method('PUT')
        <label>Title</label>
        <input type="text" name="title" class="@error('title') error-border @enderror" value="{{ old('title', $post->title) }}">
        @error('title')
        <div class="error">
            {{ $message }}
        </div>
        @enderror

        <label>Description</label>
        <textarea name="description" cols="30" rows="10" class="@error('description') error-border @enderror">{{ old('description', $post->description) }}</textarea>
        @error('description')
        <div class="error">
            {{ $message }}
        </div>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection
