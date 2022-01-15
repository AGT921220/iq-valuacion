@extends('layouts.dashboard')

@section('content')

@if(auth()->user()->type=='admin')
<ul>
    <a href="/dashboard/usuarios">Usuarios</a>
</ul>
@endif



<h1>Hola {{auth()->user()->name}}</h1>

@if(auth()->user()->type=='client')
@include('partials.clients.footer')
@include('partials.clients.activity')
@endif

@endsection