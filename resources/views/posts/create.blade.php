@extends('layout')

@section('title', 'Create new post')

@section('content')
<h1>Create a New Blog Post</h1>
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label>Title</label>
    <input type="text" name="title" class="@error('title') error-border @enderror" value="{{ old('title') }}">
    @error('title')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

    <label>Description</label>
    <textarea name="description" cols="30" rows="10" class="@error('description') error-border @enderror">{{ old('description') }}</textarea>
    @error('description')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <button type="submit">Submit</button>
</form>
@endsection
