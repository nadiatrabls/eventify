@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h1 class="my-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <h3>Categories</h3>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-2">Add Category</a>
            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item">
                        {{ $category->name }}
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm float-end ms-2">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-4">
            <h3>Events</h3>
            <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-2">Add Event</a>
            <ul class="list-group">
                @foreach($events as $event)
                    <li class="list-group-item">
                        {{ $event->title }}
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning btn-sm float-end ms-2">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-4">
            <h3>Reservations</h3>
            <ul class="list-group">
                @foreach($reservations as $reservation)
                    <li class="list-group-item">
                        {{ $reservation->event->title }} - {{ $reservation->user->name }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
