@extends('layouts.app')
@section('content')
    <h2>Notas</h2>
    <a href="{{ route('notas.create') }}">Crear nueva nota</a>
    <ul>
        @foreach($notas as $nota)
            <li>
                <a href="{{ route('notas.show', $nota->id) }}">{{ $nota->titulo }}</a>
            </li>
        @endforeach
    </ul>
@endsection
