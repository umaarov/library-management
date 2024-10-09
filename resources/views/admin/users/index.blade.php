@extends('admin.layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    </head>

    <body>
        @vite(['resources/template/plugins/fontawesome-free/css/all.min.css', 'resources/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css', 'resources/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css', 'resources/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css', 'resources/template/dist/css/adminlte.min.css'])
        <div class="container">

            <h1>User Management</h1>
            <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Add Loan</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Group</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>{{ $user->group ? $user->group->name : 'N/A' }}</td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline-block"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>
                            </tr>
                            <tr>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @vite([
            'resources/template/plugins/jquery/jquery.min.js',
            'resources/template/plugins/bootstrap/js/bootstrap.bundle.min.js',
            'resources/template/plugins/datatables/jquery.dataTables.min.js',
            'resources/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
            'resources/template/plugins/datatables-responsive/js/dataTables.responsive.min.js',
            'resources/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
            'resources/template/plugins/datatables-buttons/js/dataTables.buttons.min.js',
            'resources/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
            'resources/template/plugins/jszip/jszip.min.js',
            'resources/template/plugins/pdfmake/pdfmake.min.js',
            'resources/template/plugins/pdfmake/vfs_fonts.js',
            'resources/template/plugins/datatables-buttons/js/buttons.html5.min.js',
            'resources/template/plugins/datatables-buttons/js/buttons.print.min.js',
            'resources/template/plugins/datatables-buttons/js/buttons.colVis.min.js',
            'resources/template/dist/js/adminlte.min.js',
            'resources/template/dist/js/demo.js',
        ])
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endsection

</body>

</html>
