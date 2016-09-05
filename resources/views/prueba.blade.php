@extends('layout')
@section('contenido')
    @if(count($per)==0)

        <h1>correcto</h1>
    @else
        <h1>Holas</h1>
    @endif
    @endsection