@extends('layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center text-success">{{ isset($category) ? 'Edit Category' : 'Create Category' }}</h1>
    <form action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}" method="POST" class="p-4 border border-success rounded shadow">
        @csrf
        @if(isset($category)) @method('PUT') @endif
        <div class="mb-3">
            <label for="name" class="form-label text-success">Category Name</label>
            <input type="text" name="name" id="name" class="form-control border-success" value="{{ $category->name ?? '' }}" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">
                {{ isset($category) ? 'Update' : 'Create' }}
            </button>
        </div>
    </form>
</div>
@endsection
