@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
@if ($id != null)
<p>Exibindo produto com ID: {{$id}}</p>
@endif
@endsection
