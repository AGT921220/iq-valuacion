@extends('layouts.dashboard')

@section('content')
<div >
    {{-- <div class="container"> --}}
    <div>
        {{-- <div class="row"> --}}
        <div class="col-md-12">
            {{-- <div class="card">
                <div class="card-header"> --}}
                <div>

                    <div>
                    <span>Lista de Catalogo General</span>
                </div>

                <div class="card-body" style="overflow-x:scroll">
                    <table class="table" id="datatable" style="overflow-x:scroll">
                        <thead>
                            <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Wpp</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Terreno</th>
                            <th scope="col">Construccion</th>

                            <th scope="col">Operacion</th>
                            <th scope="col">Avaluo</th>
                            <th scope="col">Arancel</th>
                            <th scope="col">Plano</th>
                            <th scope="col">Total</th>
                            <th scope="col">Fecha</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cotizaciones as $item)
                            <tr>
                                <td>{{ $item->tipo }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->wpp }}</td>
                                <td>{{ $item->correo }}</td>
                                <td>{{ $item->terreno }} Mts</td>
                                <td>{{ $item->construccion }} Mts</td>

                                <td>$ {{ $item->operacion }}</td>
                                <td>$ {{ $item->costoAvaluo }}</td>
                                <td>$ {{ $item->costoArancel }}</td> 
                                <td>$ {{ $item->costoPlano }}</td>                                                               
                                <td>$ {{ $item->costoTotal }}</td>                                                               
                                <td>{{substr($item->created_at,0,10) }}</td>                                                               

                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Wpp</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Terreno</th>
                                <th scope="col">Construccion</th>
    
                                <th scope="col">Operacion</th>
                                <th scope="col">Avaluo</th>
                                <th scope="col">Arancel</th>
                                <th scope="col">Plano</th>
                                <th scope="col">Total</th>
                                <th scope="col">Fecha</th>
                            </tr>
                        </tfoot>
                    </table>

                {{-- fin card body --}}
                </div>

                {{-- <a href="{{ route('agregar_catalogogral') }}" class="btn btn-primary btn-sm">Nuevo Catalogo</a> --}}
            </div>
        </div>
    </div>
</div>



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

@endsection
<style>
    tbody tr td,thead tr th{
        text-align: center;
    }
    .actions_table{
        justify-content: space-evenly;
    }
    .actions_table form{
        display: contents;
        margin: 1em auto;
    }
    </style>
<script src="{{ asset('js/datatables.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/datatables.css') }}">