<!-- resources/views/media/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $media->title }}</h1>

    <p><strong>Rating:</strong> {{ $media->rating }}</p>
    <p><strong>Lengte:</strong> {{ $media->length_in_minutes }} minuten</p>
    <p><strong>Released:</strong> {{ $media->released_at }}</p>
    <p><strong>Land van herkomst:</strong> {{ $media->country_of_origin }}</p>
    <p><strong>Samenvatting:</strong> {{ $media->summary }}</p>
    <p><strong>Taal:</strong> {{ $media->spoken_in_language }}</p>
    <p><strong>Type:</strong> {{ ucfirst($media->type) }}</p>

    <h3>Acteurs:</h3>
    <ul>
        @foreach ($media->actors as $actor)
            <li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
        @endforeach
    </ul>

    <a href="{{ url('/media') }}">Terug naar overzicht</a>
@endsection
