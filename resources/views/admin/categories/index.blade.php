@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Categories Management</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <form method="GET" action="{{ route('categories.index') }}" class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="search" class="form-control" placeholder="Search categories..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <select name="sort_by" class="form-select">
                            <option value="id_asc" {{ request('sort_by') == 'id_asc' ? 'selected' : '' }}>Sort by ID (ASC)</option>
                            <option value="id_desc" {{ request('sort_by') == 'id_desc' ? 'selected' : '' }}>Sort by ID (DESC)</option>
                            <option value="name_asc" {{ request('sort_by') == 'name_asc' ? 'selected' : '' }}>Sort by Name (ASC)</option>
                            <option value="name_desc" {{ request('sort_by') == 'name_desc' ? 'selected' : '' }}>Sort by Name (DESC)</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-secondary w-100">Apply Filters</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th>Name</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="text-center">{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="bi bi-pencil-fill"></i> Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
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
