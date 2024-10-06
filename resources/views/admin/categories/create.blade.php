@vite(['resources/css/categories.css'])

@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Category</h1>

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection
