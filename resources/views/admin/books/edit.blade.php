@extends('admin.layouts.app')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
        <h1>Edit Book</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}">
            </div>
            <div class="form-group">
                <label for="published_year">Published Year</label>
                <input type="number" name="published_year" class="form-control" value="{{ $book->published_year }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" required>
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="total_copies">Total Copies</label>
                <input type="number" name="total_copies" class="form-control" value="{{ $book->total_copies }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Book</button>
        </form>
    </div>
@endsection
