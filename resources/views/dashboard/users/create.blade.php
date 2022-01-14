@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Agregar Usuario</span>
                    <a href="/dashboard/usuarios" class="btn btn-primary btn-sm">Volver a lista de usuarios...</a>
                </div>
                <div class="card-body">

                    <form method="POST" action="/dashboard/usuarios" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <input id="name" type="text"
                                class="form-control @error('name')  is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">
                            <label for="paternal_surname" class="col-md-4 col-form-label text-md-right">Apellido
                                Paterno</label>

                            <input id="paternal_surname" type="text"
                                class="form-control @error('paternal_surname') is-invalid @enderror"
                                name="paternal_surname" value="{{ old('paternal_surname') }}" required
                                autocomplete="paternal_surname" autofocus>

                            @error('paternal_surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="maternal_surname" class="col-md-4 col-form-label text-md-right">Apellido
                                Materno</label>

                            <input id="maternal_surname" type="text"
                                class="form-control @error('maternal_surname') is-invalid @enderror"
                                name="maternal_surname" value="{{ old('maternal_surname') }}" required
                                autocomplete="maternal_surname" autofocus>

                            @error('maternal_surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="email">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirma
                                Contraseña</label>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                        </div>

                </div>

                <div class="form-group">

                <div class="form-group image_container" style="    justify-content: center;
                        text-align: center;
                        align-items: center;
                        display: flex;
                        flex-direction: column;
                        margin: auto;">
                 <label class="col-md-4 col-form-label text-md-right">Foto de perfil</label>

                    <img class="profile_image_show" style="width:100px;" src="{{ asset('images/no-image.png') }}">

                    <label for="imagen_profile">Seleccionar imágen</label>
                    <input style="display: none;" type="file" name="user_profile" id="imagen_profile">

                </div> 
            </div>


                <div class="form-group">
                    <label>Tipo de Usuario</label>
                <select name="type" id="type" class="form-control" @error('password') is-invalid @enderror">
                    @foreach($userTypes as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>                                    
                    @endforeach

                </select>
                @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



                <button class="btn btn-primary btn-block" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>