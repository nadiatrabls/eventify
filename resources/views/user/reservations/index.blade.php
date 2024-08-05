@extends('layouts.app')

@section('title', 'My Reservations')

@section('content')
<div class="container">
    <h1 class="my-4">My Reservations</h1>

    @if($reservations->isEmpty())
        <div class="alert alert-warning">You have no reservations.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->event->title }}</td>
                        <td>{{ $reservation->event->date }}</td>
                        <td>{{ $reservation->event->location }}</td>
                        <td>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
