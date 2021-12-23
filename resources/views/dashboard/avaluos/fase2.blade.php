@extends('layouts.dashboard')

@section('content')

<form method="POST" action="/avaluos/fase2" enctype="multipart/form-data">
    @csrf
<h3>Detalles de la casa</h3>

<div class="container">
        


    <div class="form-group">
        <label >Tu casa de cuantas plantas es</label>
        <select class="form-control select_plantas" name="plantas">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>          
          <option value="4">4</option>   
        </select>
    </div>
    
<div class="plantas_inputs">

</div>





    <div class="form-group">
        <label >Tu casa tiene</label>
        <select class="form-control" name="material1">
          <option value="yeso">Yeso</option>
          <option value="enjarre">Enjarre</option>
          <option value="otro">Otro</option>
          <option value="ninguno">Ninguno</option>
        </select>
      </div>
    
      <div class="form-group">
        <label >Cuenta con</label>
        <select class="form-control" name="material2">
          <option value="concreto">Firmes de concreto</option>
          <option value="cemento">Cemento pulido</option>
          <option value="loseta">Loseta vinílica</option>
          <option value="mosaico">Mosaico</option>
          <option value="ceramica">Cerámica</option>

        </select>
      </div>

      <div class="form-group">
        <label >Cuenta con pintura</label>
        <select class="form-control" name="pintura">
          <option value="si">Si</option>
          <option value="no">No</option>
        </select>
      </div>

        <div class="form-group">
              <label >Que otros detalles tiene?</label>
              <input type="text"  name="detalles"  placeholder="PA igual, recámaras etc etc...." class="form-control mb-2" required=""    />
        </div>

        <br><br><br>


    <button class="btn btn-primary btn-block submit_fase2" >Continuar</button>
    

  </div>

  </form>

@endsection
<script src="{{ asset('js/fase2.js') }}" defer></script>
