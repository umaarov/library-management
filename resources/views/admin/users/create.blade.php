@extends('admin.layouts.app')

@section('title', 'Add User')

@section('content')
    <div class="container">
        <h1>Add User</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="">Select a role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <div class="form-group">
                <label for="group_id">Group</label>
                <select name="group_id" class="form-control" required>
                    <option value="">Select a group</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
@endsection
