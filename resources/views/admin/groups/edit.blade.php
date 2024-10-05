@extends('admin.layouts.app')

@section('title', 'Edit Group')

@section('content')
    <div class="container">
        <h1>Edit Group</h1>
        <form action="{{ route('groups.update', $group->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Group Name</label>
                <input type="text" name="name" class="form-control" value="{{ $group->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Group</button>
        </form>
    </div>
@endsection
