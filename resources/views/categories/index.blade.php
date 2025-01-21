@extends('layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center text-success">Categories</h1>
    <div class="mb-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success">Create New Category</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-success text-success">
            <tr>
                <th>Name</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td class="text-center">
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
