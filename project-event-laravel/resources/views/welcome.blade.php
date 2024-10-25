    @extends('layouts.main')

    @section('title', 'GERE UM COM')

    @section('content')

        <h1>Essa é a Página Inicial</h1>
        <img src="./img/event3.jpg" alt="">
        @if (10 > 15)
            <p>A condição é true</p>
        @endif 

        <p> {{ $nome }} </p> 

        <!-- IF -->
         @if ($nome == 'Lucas')
            <p>É o Lucas</p>
         @elseif ($nome == 'Edimar')
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos. A profissão é {{ $profissao }}</p>   
         @else
            <p>Não é o Lucas</p>
        @endif 

        <!-- fOR -->
        @for($i = 0; $i < count($arr); $i++)
         <p> {{ $arr[$i] }} - {{ $i }} </p>
        @endfor

        <!-- comentários no HTML -->
         {{-- Este é um comentário no blade --}}

        <!-- FOREACH -->
        @foreach($nomes as $nome)  
        <p>{{ $loop -> index }}</p>
        <p> {{ $nome }} </p>
        @endforeach
        <!-- PHP -->
        @php 
            echo 'Olá, mundo!';
        @endphp     
    @endsection