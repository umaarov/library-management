@extends('admin.layouts.app')

@section('title', 'Add Book')

@section('content')
    <div class="container">
        <h1>Add Book</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control">
            </div>
            <div class="form-group">
                <label for="published_year">Published Year</label>
                <input type="number" name="published_year" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="total_copies">Total Copies</label>
                <input type="number" name="total_copies" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>
@endsection
