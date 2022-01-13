@extends('layouts.dashboard')

@section('content')
<div>
    <div>

        <div class="col-md-12">
            <div>
                <div>
                    <span>Lista de Usuarios</span>
                </div>

                <div class="card-body" style="overflow-x:scroll">
                    <table class="table" id="datatable" style="overflow-x:scroll">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->name. ' '.$item->lastname }}</td>
                                <td>{{ $item->email }}</td>

                                <td>
                                    <img style="width:50px; height:50px" src="{{ asset($item->user_profile) }}">
                                </td>

                                <td class="actions_table">
                                     <a href="/dashboard/usuarios/{{$item->id}}"
                                        class="btn btn-warning">Editar</a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Foto</th> 
                                <th scope="col">Acciones</th>
                            </tr>
                        </tfoot>
                    </table>

                    {{-- fin card body --}}
                </div>

                {{-- <a href="{{ route('crear_propiedad') }}" class="btn btn-primary btn-sm">Nueva Propiedad</a> --}}
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

@endsection
<style>
    tbody tr td,
    thead tr th {
        text-align: center;
    }

    .actions_table {
        justify-content: space-evenly;
    }

    .actions_table form {
        display: contents;
        margin: 1em auto;
    }
</style>
<script src="{{ asset('js/datatables.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/datatables.css') }}">