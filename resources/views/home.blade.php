@extends('layouts.dashboard')

@section('content')

@if(auth()->user()->type=='encargado')
<ul>
    <a href="/dashboard/usuarios">Usuarios</a>
</ul>
@endif


<h1>Hola {{auth()->user()->name}}</h1>

@endsection
