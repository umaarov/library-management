@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <!-- Page Header -->

        <h1>User Management</h1>
        <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Add Loan</a>
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

                    <!-- User Table -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Group</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>{{ $user->group ? $user->group->name : 'N/A' }}</td>
                        <td class="text-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                  class="d-inline-block" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            {{--<div class="d-flex justify-content-end mt-3">--}}
            {{--{{ $users->links('vendor.pagination.bootstrap-4') }}--}}
            {{--</div>--}}
    </div>
@endsection
