@extends('layouts.app')

@section('title', 'Reservations')

@section('content')
<div class="container">
    <h1>Reservations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Event</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->event->title }}</td>
                    <td>{{ $reservation->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
