@extends('layouts.main')

@section('title', 'GERE UM COM')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

@endsection