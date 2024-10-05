@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container">
        <h1>Edit User</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="student" {{ $user->role === 'student' ? 'selected' : '' }}>Student</option>
                    <option value="teacher" {{ $user->role === 'teacher' ? 'selected' : '' }}>Teacher</option>
                    <option value="staff" {{ $user->role === 'staff' ? 'selected' : '' }}>Staff</option>
                </select>
            </div>
            <div class="form-group">
                <label for="group_id">Group</label>
                <select name="group_id" class="form-control" required>
                    <option value="">Select a group</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}" {{ $user->group_id === $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
