@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>User Management</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add User</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Group</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Group</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
