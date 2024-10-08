@extends('admin.layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Categories Management</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>

        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th>
                    ID
                    <input type="text" name="id_search" class="form-control form-control-sm mt-2" placeholder="ID"
                           value="{{ request('id_search') }}">
                </th>

                <th>
                    Name
                    <input type="text" name="name_search" class="form-control form-control-sm mt-2"
                           placeholder="Name" value="{{ request('name_search') }}">
                </th>

                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm me-1">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?');">
                                <i class="bi bi-trash-fill"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No categories found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end mt-3">
        {{ $categories->links('vendor.pagination.bootstrap-4') }}
    </div>
    </div>
@endsection
