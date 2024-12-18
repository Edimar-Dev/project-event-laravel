@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group pb-3">
            <label for="image" class="pb-3">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group pb-3">
            <label for="title" class="pb-3">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group pb-3">
            <label for="title" class="pb-3">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group pb-3">
            <label for="title" class="pb-3">O evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Sim</option>
                <option value="1">Não</option>
            </select>
        </div>
        <div class="form-group pb-3">
            <label for="title" class="pb-3">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva o que vai acontecer no evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection