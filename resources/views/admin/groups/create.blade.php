@extends('admin.layouts.app')

@section('title', 'Add Group')

@section('content')
    <div class="container">
        <h1>Add Group</h1>
        <form action="{{ route('groups.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Group Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Group</button>
        </form>
    </div>
@endsection
