@extends('layouts.dashboard')

@section('content')

<h1>Hola {{auth()->user()->name}}</h1>

@endsection
