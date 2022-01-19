@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Solicitar Servicio de Plano catastral</span>
                </div>
                <div class="card-body">

                    <form method="POST" action="/dashboard/servicios/plano-catastral" enctype="multipart/form-data">
                        @csrf


                <div class="form-group">
                    <label>Seleccione Perito Valuador</label>
                <select name="appraiser_id" id="appraiser_id" class="form-control" @error('appraiser_id') is-invalid @enderror">
                    @foreach($appraisers as $item)
                    <option value="{{$item->id}}">{{$item->name.' '.$item->paternal_surname}}</option>                                    
                    @endforeach

                </select>
                @error('appraiser_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> 



                <button class="btn btn-primary btn-block" type="submit">Continuar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>