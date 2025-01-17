<!-- resources/views/actors/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>

    <p><strong>Leeftijd:</strong> {{ $actor->age }}</p>
    <p><strong>Geslacht:</strong> {{ ucfirst($actor->sex) }}</p>
    <p><strong>Land van herkomst:</strong> {{ $actor->country }}</p>
    <p><strong>Heeft awards gewonnen:</strong> {{ $actor->has_won_awards ? 'Ja' : 'Nee' }}</p>

    <h3>Films en Series:</h3>
    <ul>
        @foreach ($actor->media as $mediaItem)
            <li>{{ $mediaItem->title }} ({{ ucfirst($mediaItem->type) }})</li>
        @endforeach
    </ul>

    <a href="{{ url('/actors') }}">Terug naar overzicht</a>
@endsection
