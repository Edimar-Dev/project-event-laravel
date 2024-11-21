@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<h1>Criar um Evento</h1>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title">Eventos:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Sim</option>
                <option value="1">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva o que vai acontecer no evento"></textarea>
        </div>
        <input type="submit" class="btn btm-primary" value="Criar Evento">
    </form>
</div>
@endsection