@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="my-4">Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    <!-- Add more dashboard content here -->
    <a href="{{ route('reservations.index') }}" class="btn btn-primary">View My Reservations</a>
</div>
@endsection
