@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Loans Management</h1>
        <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Add Loan</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book</th>
                <th>User</th>
                <th>Loan Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td>{{ $loan->id }}</td>
                    <td>{{ $loan->book->title }}</td>
                    <td>{{ $loan->user->first_name }} {{ $loan->user->last_name }}</td>
                    <td>{{ $loan->loan_date }}</td>
                    <td>{{ $loan->return_date }}</td>
                    <td>{{ $loan->status }}</td>
                    <td>
                        <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Ensure this line is below the table -->
        {{ $loans->links() }} <!-- Pagination links -->
    </div>
@endsection
