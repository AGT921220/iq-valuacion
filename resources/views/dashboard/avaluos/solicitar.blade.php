@extends('layouts.dashboard')

@section('content')

<form method="POST" action="/avaluos/solicitar" enctype="multipart/form-data">
    @csrf
<h3>Datos de la vivienda</h3>

<div class="container">
        <div class="form-group">
            <label >Calle</label>
            <input type="text"  name="calle"  placeholder="Calle" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
            <label >Numero</label>
            <input type="number"  name="numero"  placeholder="numero" class="form-control mb-2" required=""    />
        </div>

        <div class="form-group">
            <label >Colonia</label>
            <input type="text"  name="colonia"  placeholder="Colonia" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
            <label >Codigo Postal</label>
            <input type="number"  name="cp"  placeholder="Codigo Postal" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
            <label >Municipio</label>
            <input type="text"  name="municipio"  placeholder="Municipio" class="form-control mb-2" required=""    />
        </div>

        <div class="form-group">
              <label >Estado</label>
              <input type="text"  name="estado"  placeholder="Estado" class="form-control mb-2" required=""    />
        </div>

        <div class="form-group">
              <label >Antiguedad</label>
              <input type="text"  name="antiguedad"  placeholder="Antiguedad(Tiempo viviendo ahi)" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
              <label >Superficie del terreno</label>
              <input type="number"  name="terreno"  placeholder="Superficie de terreno(en metros cuadrados)" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
              <label >Superficie de construcción</label>
              <input type="number"  name="construccion"  placeholder="Superficie de construccion (en metros cuadrados)" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
              <label >Manzana</label>
              <input type="text"  name="manzana"  placeholder="Manzana" class="form-control mb-2" required=""    />
        </div>
        <div class="form-group">
              <label >Lote</label>
              <input type="number"  name="lote"  placeholder="Lote" class="form-control mb-2" required=""    />
        </div>
        <label >Entre calles</label>
        <div class="form-group">

                <label class="col-md-1 col-sm-1 mb-2">Entre</label>
                <input type="text"  name="calles1"  placeholder="" class="col-md-4 col-sm-8 mb-2" required=""    />
                <label class="col-md-1 col-sm-1 mb-2">Y</label>
                <input type="text"  name="calles2"  placeholder="" class="col-md-4 col-sm-8 mb-2" required=""    />

        </div>
<br><br><br>


    <button class="btn btn-primary btn-block" type="submit">Continuar</button>

  </div>

  </form>

@endsection
