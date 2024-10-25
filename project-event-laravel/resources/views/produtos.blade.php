@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    @if($id != null)
        <p>Exibindo produtos id: {{$id}}</p>
    @endif

@endsection