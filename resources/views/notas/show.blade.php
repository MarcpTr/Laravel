@extends('layouts.app')
@section('content')
    <h2>{{ $nota->titulo }}</h2>
    <p>{{ $nota->contenido }}</p>

    <form action="{{ route('notas.update', $nota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ $nota->titulo }}" required><br>
        <textarea name="contenido" required>{{ $nota->contenido }}</textarea><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
