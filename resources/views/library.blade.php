@extends('layouts.master')

@section('content')
    <h1>Muziekbibliotheek Pagina</h1>

    <h2>Alle songs</h2>

    <ul>
        @foreach($songs as $song)
            <li>{{ $song->song_name }} – {{ $song->author }} ({{ $song->release_year }})</li>
        @endforeach
    </ul>

@endsection