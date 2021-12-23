@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Agregar Propiedad</span>
                    <a href="{{ route('ver_propiedades') }}" class="btn btn-primary btn-sm">Volver a lista de propiedades...</a>
                </div>
                <div class="card-body">     
                  
                  <form method="POST" action="{{ route('guardar_propiedad') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" name="nombre" placeholder="Nombre de Propiedad" class="form-control mb-2" required="" {{ old('nombre') }}/>
                    </div>
 
                    <div class="form-group">
                      <label >Tipo</label>
                      <select class="form-control" name="tipo">
                        <option value="Venta">Venta</option>
                        <option value="Renta">Renta</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Colonia</label>
                      <input type="text" name="colonia" placeholder="Colonia" class="form-control mb-2" required="" {{ old('colonia') }}/>
                    </div>

                    <div class="form-group">
                      <label>Precio</label>
                      <input type="number" step="any" name="precio" placeholder="Precio" class="form-control mb-2" required="" {{ old('precio') }}/>
                    </div>

                    <div class="form-group">
                      <label>Construcción (M2)</label>
                      <input type="number" step="any" name="construccion" placeholder="Construccion" class="form-control mb-2" required="" {{ old('construccion') }}/>
                    </div>

                    <div class="form-group">
                      <label>Terreno (M2)</label>
                      <input type="number" step="any" name="terreno" placeholder="Terreno" class="form-control mb-2" required="" {{ old('terreno') }}/>
                    </div>


                    <div class="form-group">
                      <label>Imágen</label>
                      <div class="form-group image_container" style="justify-content: center;text-align: center;align-items: center;display: flex;flex-direction: column;margin: auto;">
                              <img class="profile_image_show" style="width:100px;" src="{{ asset('images/no-image.png') }}">                  
                            <label for="imagen_profile" style="cursor:pointer;">Seleccionar imágen</label>
                            <input style="display: none;" type="file" name="imagen" id="imagen_profile" accept="image/x-png,image/gif,image/jpeg">
                      </div>  
                  </div>  
                  <div class="form-group">
                    <label>url</label>
                    <input type="text" name="url" placeholder="Url de Facebook" class="form-control mb-2" required="" {{ old('url') }}/>
                  </div>


                    <div class="form-group">
                      <label >Estatus</label>
                      <select class="form-control" name="status">
                        <option value="Activa">Activa</option>
                        <option value="Inactiva">Inactiva</option>
                      </select>
                    </div>

<!--
    
            $table->string('status');
 -->
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>


