@extends('layouts.app')
@section('content')

    <form action="{{ url('/lab') }}" method="POST">
   
        @include('lab.form')
    
    </form>
@endsection