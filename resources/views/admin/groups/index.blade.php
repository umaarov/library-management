@extends('admin.layouts.app')

@section('title', 'Groups')

@section('content')
    <div class="container">
        <h1>Groups</h1>
        @if (session('success'))
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
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Expandable Table Tree</h3>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body p-0">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="border-0">183</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                    <td>
                                        <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                        219
                                    </td>
                                </tr>
                                <tr class="expandable-body">
                                    <td>
                                        <div class="p-0">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr data-widget="expandable-table" aria-expanded="false">
                                                        <td>
                                                            <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                            219-1
                                                        </td>
                                                    </tr>
                                                    <tr class="expandable-body">
                                                        <td>
                                                            <div class="p-0">
                                                                <table class="table table-hover">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>219-1-1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>219-1-2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>219-1-3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-widget="expandable-table" aria-expanded="false">
                                                        <td>
                                                            <button type="button" class="btn btn-primary p-0">
                                                                <i
                                                                    class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                            </button>
                                                            219-2
                                                        </td>
                                                    </tr>
                                                    <tr class="expandable-body">
                                                        <td>
                                                            <div class="p-0">
                                                                <table class="table table-hover">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>219-2-1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>219-2-2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>219-2-3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>219-3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                </tr>
                                <tr>
                                    <td>494</td>
                                </tr>
                                <tr>
                                    <td>832</td>
                                </tr>
                                <tr>
                                    <td>982</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

    </div>
@endsection
