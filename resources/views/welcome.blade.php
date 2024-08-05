@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Welcome to Eventify</h1>

            @guest
                <div class="alert alert-info">
                    <p>To make reservations or manage your profile, please <a href="{{ route('login') }}" class="btn btn-primary">Login</a> or <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>.</p>
                </div>
            @endguest

            <h2 class="my-4">Upcoming Events</h2>

            @if($events->isEmpty())
                <div class="alert alert-warning">No events available at the moment.</div>
            @else
                <div class="accordion" id="eventsAccordion">
                    @foreach($categories as $category)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $category->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                                    {{ $category->name }}
                                </button>
                            </h2>
                            <div id="collapse{{ $category->id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $category->id }}" data-bs-parent="#eventsAccordion">
                                <div class="accordion-body">
                                    <div class="row">
                                        @foreach ($events->where('category_id', $category->id) as $event)
                                            <div class="col-md-4 mb-4">
                                                <div class="card">
                                                    <img src="{{ asset('images/events/'.$event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $event->title }}</h5>
                                                        <p class="card-text">{{ $event->description }}</p>
                                                        <p class="card-text"><small class="text-muted">{{ $event->date }} at {{ $event->location }}</small></p>
                                                        @auth
                                                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View Details</a>
                                                        @endauth
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
