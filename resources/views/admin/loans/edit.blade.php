@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Loan</h1>

        <form method="POST" action="{{ route('loans.update', $loan->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="book_id">Book</label>
                <select name="book_id" class="form-control" required>
                    <option value="">Select a book</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}" {{ $loan->book_id == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" class="form-control" required>
                    <option value="">Select a user</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $loan->user_id == $user->id ? 'selected' : '' }}>{{ $user->first_name }} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="loan_date">Loan Date</label>
                <input type="date" name="loan_date" class="form-control" value="{{ $loan->loan_date }}" required>
            </div>

            <div class="form-group">
                <label for="return_date">Return Date</label>
                <input type="date" name="return_date" class="form-control" value="{{ $loan->return_date }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Loan</button>
        </form>
    </div>
@endsection
