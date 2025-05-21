@extends('layouts.app')

@section('content')
    <h1>Nota no encontrada</h1>
    <p>Lo sentimos, no pudimos encontrar la nota que estás buscando.</p>
    <a href="{{ route('notas.index') }}">Volver a la lista de notas</a>
@endsection