@extends('layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center text-success">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</h1>
    <form action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}" method="POST" class="p-4 border border-success rounded shadow">
        @csrf
        @if(isset($post)) @method('PUT') @endif
        <div class="mb-3">
            <label for="title" class="form-label text-success">Post Title</label>
            <input type="text" name="title" id="title" class="form-control border-success" value="{{ $post->title ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label text-success">Content</label>
            <textarea name="content" id="content" class="form-control border-success" rows="5" required>{{ $post->content ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label text-success">Category</label>
            <select name="category_id" id="category_id" class="form-select border-success" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($post) && $post->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">
                {{ isset($post) ? 'Update' : 'Create' }}
            </button>
        </div>
    </form>
</div>
@endsection
