@vite(['resources/css/users.css'])

@extends('admin.layouts.app')

@section('title', 'Add User')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h2 class="mb-0">Add New User</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                            <!-- First Name Input -->
                    <div class="form-group mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Enter first name" required>
                            <div class="invalid-feedback">First name is required.</div>
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Last Name Input -->
                    <div class="form-group mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Enter last name" required>
                            <div class="invalid-feedback">Last name is required.</div>
                            @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email address" required>
                            <div class="invalid-feedback">Valid email is required.</div>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Input -->
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                        </div>
                    </div>

                    <!-- Role Selection -->
                    <div class="form-group mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                            <option value="" disabled selected>Select a role</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            <option value="staff">Staff</option>
                        </select>
                        <div class="invalid-feedback">Role is required.</div>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Group Selection -->
                    <div class="form-group mb-3">
                        <label for="group_id" class="form-label">Group</label>
                        <select name="group_id" class="form-select @error('group_id') is-invalid @enderror" required>
                            <option value="" disabled selected>Select a group</option>
                            @foreach ($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Group selection is required.</div>
                        @error('group_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-plus-lg"></i> Add User
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
