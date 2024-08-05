@extends('layouts.app')

@section('title', 'My Reservations')

@section('content')
<div class="container">
    <h1>My Reservations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Event</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->event->title }}</td>
                    <td>{{ $reservation->event->date }}</td>
                    <td>
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
