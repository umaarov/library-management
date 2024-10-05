@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalBooks }}</h3>
                        <p>Books</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalUsers }}</h3>
                        <p>Users</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalLoans }}</h3>
                        <p>Loans</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
