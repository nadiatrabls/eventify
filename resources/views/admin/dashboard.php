@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h1 class="my-4">Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block">Manage Categories</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('events.index') }}" class="btn btn-secondary btn-block">Manage Events</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('reservations.index') }}" class="btn btn-success btn-block">View All Reservations</a>
        </div>
    </div>
</div>
@endsection
