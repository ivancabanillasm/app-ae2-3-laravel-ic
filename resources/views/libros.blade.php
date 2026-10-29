
@extends('layouts.app')

@section('contenido')

<h2>Listado de libros</h2>

@if($libros->count() > 0)

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Año de publicación</th>
        </tr>

        @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->anio_publicacion }}</td>
            </tr>
        @endforeach

    </table>

@else

    <p>No hay libros disponibles.</p>

@endif

@endsection
