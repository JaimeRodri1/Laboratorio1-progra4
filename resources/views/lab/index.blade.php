@extends('layouts.app')
@section('content')

    <h2>Datos</h2>

    <a href="{{ url('lab/create') }}">Add persona</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tarea</th>
                <th>Materia</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($labs as $lab)
            <tr>
                <td>{{ $lab->id }}</td>
                <td>{{ $lab->nombre }}</td>
                <td>{{ $lab->Tarea }}</td>
                <td>{{ $lab->Materia}}</td>
               
            </tr>
            @endforeach
    </tbody>
    </table>
    <br/>
   
@endsection