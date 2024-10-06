@vite(['resources/css/categories.css'])

@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>

        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection
