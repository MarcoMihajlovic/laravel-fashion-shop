@extends('layouts.app')

@section('titoloPagina', 'Esercizio')

@section('content')
    @foreach ($vestiti as $vestito)
        <h1 style="text-align: center">{{$vestito['label']}}</h1>
        <h3>Tipo: {{$vestito['type']}}</h3>
        <h3>Colore disponibile: {{$vestito['color']}}</h3>
        <h3>Taglia disponibile: {{$vestito['size']}}</h3>
    @endforeach
@endsection