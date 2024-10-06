@vite(['resources/css/categories.css'])

@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h2 class="mb-0">Edit Category</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.update', $category->id) }}" class="needs-validation"
                      novalidate>
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Category Name</label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-pencil-square"></i>
                            </span>
                            <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter category name"
                                    value="{{ old('name', $category->name) }}"
                                    required>

                            <div class="invalid-feedback">
                                Category name is required.
                            </div>
                            @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-save"></i> Update Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
