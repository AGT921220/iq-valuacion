@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Editar {{$user->name}}</span>
                    <a href="/dashboard/usuarios" class="btn btn-primary btn-sm">Volver a lista de usuarios...</a>
                </div>
                <div class="card-body">     
                  
                  <form method="POST" action="/dashboard/usuarios/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')



                    <button class="btn btn-primary btn-block" type="submit">Editar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>


