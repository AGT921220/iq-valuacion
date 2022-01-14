@extends('layouts.dashboard')

@section('content')


<div class="card" style="margin: auto;text-align: center;">
        <img class="card-img-top" style="width: 250px;border-radius: 100%;height: 250px;" src="{{ $user->user_profile }}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">{{ $user->name }}</h4>
          <p class="card-text">{{ $user->email }}</p>
          <a href="" class="btn btn-primary">Acción</a>
        </div>
      </div>

@endsection
