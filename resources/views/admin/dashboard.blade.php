@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row mt-2">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalBooks }}</h3>
                    <p>Total Books</p>
                </div>
                <a href="{{ route('books.index') }}" class="small-box-footer">More info</a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Total Users</p>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">More info</a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalLoans }}</h3>
                    <p>Total Loans</p>
                </div>
                <a href="{{ route('loans.index') }}" class="small-box-footer">More info</a>
            </div>
        </div>
    </div>
@endsection
