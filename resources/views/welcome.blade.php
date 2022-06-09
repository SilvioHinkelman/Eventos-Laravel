@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

    <h1>Algum titulo</h1>
    <a href="/produtos">Produtos</a>
    <div>
        <a href="/contact">Contatos</a>
    </div>
    <img src="/img/banner.jpg" alt="Banner">
    @if (10 > 15)
        <p>Condição é true</p>
    @endif

    <h1>{{ $nome }}</h1>

    @if ($nome == 'Silvio')
        <p>O nome é {{ $nome }} e possui {{ $idade }} anos, profissional de {{ $profissao }}.</p>
    @else
        <p>O nome não é SIlvio</p>
    @endif

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }} {{ $nome }}</p>
    @endforeach

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
    @endfor

@endsection
