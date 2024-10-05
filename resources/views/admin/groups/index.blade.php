@extends('admin.layouts.app')

@section('title', 'Groups')

@section('content')
    <div class="container">
        <h1>Groups</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('groups.create') }}" class="btn btn-primary mb-3">Add Group</a>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>
                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
