@extends('layouts.app')
@section('content')
    <h2>Crear Nota</h2>
    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required><br>
        <textarea name="contenido" placeholder="Contenido" required></textarea><br>
        <button type="submit">Guardar</button>
    </form>
@endsection
