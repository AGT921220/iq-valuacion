@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">


                        <a href="/dashboard/usuarios" class="btn btn-primary btn-sm">Volver a lista de usuarios...</a>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="/dashboard/servicios/infonavit/detalle" enctype="multipart/form-data">
                            @csrf
                            <h2 class="bg-blue w-100">Solicitante</h2>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="solicitante_nombre" class="col-form-label text-md-right">Nombre</label>

                                        <input id="solicitante_nombre" type="text"
                                            class="form-control @error('solicitante_nombre')  is-invalid @enderror"
                                            name="solicitante_nombre" value="{{ old('name') }}" required
                                            autocomplete="solicitante_nombre" autofocus>

                                        @error('solicitante_nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="solicitante_ap" class=" col-form-label text-md-right">Apellido
                                            Paterno</label>

                                        <input id="solicitante_ap" type="text"
                                            class="form-control @error('solicitante_ap') is-invalid @enderror"
                                            name="solicitante_ap" value="{{ old('solicitante_ap') }}" required
                                            autocomplete="solicitante_ap" autofocus>

                                        @error('solicitante_ap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="solicitante_am" class="col-form-label text-md-right">Apellido
                                            Materno</label>

                                        <input id="solicitante_am" type="text"
                                            class="form-control @error('solicitante_am') is-invalid @enderror"
                                            name="solicitante_am" value="{{ old('solicitante_am') }}" required
                                            autocomplete="solicitante_am" autofocus>

                                        @error('solicitante_am')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="solicitante_rfc"
                                            class="col-md-4 col-form-label text-md-right">RFC</label>

                                        <input id="solicitante_rfc" type="text"
                                            class="form-control @error('solicitante_rfc') is-invalid @enderror"
                                            name="solicitante_rfc" value="{{ old('solicitante_rfc') }}" required
                                            autocomplete="solicitante_rfc">

                                        @error('solicitante_rfc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group ">
                                        <label for="solicitante_curp"
                                            class="col-md-4 col-form-label text-md-right">CURP</label>

                                        <input id="solicitante_curp" type="number"
                                            class="form-control @error('solicitante_curp') is-invalid @enderror"
                                            name="solicitante_curp" value="{{ old('solicitante_curp') }}" required
                                            autocomplete="curp">

                                        @error('solicitante_curp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="solicitante_nss"
                                            class="col-md-4 col-form-label text-md-right">NSS</label>

                                        <input id="solicitante_nss" type="number"
                                            class="form-control @error('solicitante_nss') is-invalid @enderror"
                                            name="solicitante_nss" value="{{ old('solicitante_nss') }}" required
                                            autocomplete="solicitante_nss">

                                        @error('solicitante_nss')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group ">
                                        <label for="solicitante_telefono"
                                            class="col-md-4 col-form-label text-md-right">TELEFONO</label>

                                        <input id="solicitante_telefono" type="text"
                                            class="form-control @error('solicitante_telefono') is-invalid @enderror"
                                            name="solicitante_telefono" value="{{ old('solicitante_telefono') }}"
                                            required autocomplete="solicitante_telefono">

                                        @error('solicitante_telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="solicitante_email"
                                            class="col-md-4 col-form-label text-md-right">EMAIL</label>

                                        <input id="solicitante_email" type="email"
                                            class="form-control @error('solicitante_email') is-invalid @enderror"
                                            name="solicitante_email" required autocomplete="solicitante_email">

                                        @error('solicitante_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>





                            <h3>DOMICIO PARTICULAR</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_calle"
                                            class="col-md-4 col-form-label text-md-right">Calle</label>

                                        <input id="solicitante_domicilio_calle" type="text"
                                            class="form-control @error('solicitante_domicilio_calle') is-invalid @enderror"
                                            name="solicitante_domicilio_calle" required
                                            autocomplete="solicitante_domicilio_calle">

                                        @error('solicitante_domicilio_calle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_numero"
                                            class="col-md-4 col-form-label text-md-right">No.</label>

                                        <input id="solicitante_domicilio_numero" type="number"
                                            class="form-control @error('solicitante_domicilio_numero') is-invalid @enderror"
                                            name="solicitante_domicilio_numero" required
                                            autocomplete="solicitante_domicilio_numero">

                                        @error('solicitante_domicilio_numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_interior"
                                            class="col-md-4 col-form-label text-md-right">Interior</label>

                                        <input id="solicitante_domicilio_interior" type="number"
                                            class="form-control @error('solicitante_domicilio_interior') is-invalid @enderror"
                                            name="solicitante_domicilio_interior" required
                                            autocomplete="solicitante_domicilio_interior">

                                        @error('solicitante_domicilio_interior')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_colonia"
                                            class="col-md-4 col-form-label text-md-right">Colonia</label>

                                        <input id="solicitante_domicilio_colonia" type="text"
                                            class="form-control @error('solicitante_domicilio_colonia') is-invalid @enderror"
                                            name="solicitante_domicilio_colonia" required
                                            autocomplete="solicitante_domicilio_colonia">

                                        @error('solicitante_domicilio_colonia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_municipio"
                                            class="col-md-4 col-form-label text-md-right">Municipio</label>

                                        <input id="solicitante_domicilio_municipio" type="text"
                                            class="form-control @error('solicitante_domicilio_municipio') is-invalid @enderror"
                                            name="solicitante_domicilio_municipio" required
                                            autocomplete="solicitante_domicilio_municipio">

                                        @error('solicitante_domicilio_municipio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_estado"
                                            class="col-md-4 col-form-label text-md-right">Estado</label>

                                        <input id="solicitante_domicilio_estado" type="text"
                                            class="form-control @error('solicitante_domicilio_estado') is-invalid @enderror"
                                            name="solicitante_domicilio_estado" required
                                            autocomplete="solicitante_domicilio_estado">

                                        @error('solicitante_domicilio_estado')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="solicitante_domicilio_cp"
                                            class="col-md-4 col-form-label text-md-right">CP</label>

                                        <input id="solicitante_domicilio_cp" type="text"
                                            class="form-control @error('solicitante_domicilio_cp') is-invalid @enderror"
                                            name="solicitante_domicilio_cp" required
                                            autocomplete="solicitante_domicilio_cp">

                                        @error('solicitante_domicilio_cp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <h2 class="bg-blue">VENDEDOR</h2>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_nombre" class="col-form-label text-md-right">Nombre</label>

                                        <input id="vendedor_nombre" type="text"
                                            class="form-control @error('vendedor_nombre')  is-invalid @enderror"
                                            name="vendedor_nombre" value="{{ old('vendedor_nombre') }}" required
                                            autocomplete="name_vendedor" autofocus>

                                        @error('vendedor_nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_ap" class="col-form-label text-md-right">Apellido
                                            Paterno</label>

                                        <input id="vendedor_ap" type="text"
                                            class="form-control @error('vendedor_ap')  is-invalid @enderror"
                                            name="vendedor_ap" value="{{ old('vendedor_ap') }}" required
                                            autocomplete="vendedor_ap" autofocus>

                                        @error('vendedor_ap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_am" class="col-form-label text-md-right">Apellido
                                            Materno</label>

                                        <input id="vendedor_am" type="text"
                                            class="form-control @error('vendedor_am')  is-invalid @enderror"
                                            name="vendedor_am" value="{{ old('vendedor_am') }}" required
                                            autocomplete="vendedor_am" autofocus>

                                        @error('vendedor_am')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vendedor_rfc" class="col-md-4 col-form-label text-md-right">RFC</label>

                                        <input id="vendedor_rfc" type="text"
                                            class="form-control @error('vendedor_rfc')  is-invalid @enderror"
                                            name="vendedor_rfc" value="{{ old('vendedor_rfc') }}" required
                                            autocomplete="vendedor_rfc" autofocus>

                                        @error('vendedor_rfc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vendedor_curp"
                                            class="col-md-4 col-form-label text-md-right">CURP</label>

                                        <input id="vendedor_curp" type="text"
                                            class="form-control @error('vendedor_curp')  is-invalid @enderror"
                                            name="vendedor_curp" value="{{ old('vendedor_curp') }}" required
                                            autocomplete="vendedor_curp" autofocus>

                                        @error('vendedor_curp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vendedor_email"
                                            class="col-md-4 col-form-label text-md-right">EMAIL</label>

                                        <input id="vendedor_email" type="email"
                                            class="form-control @error('vendedor_email')  is-invalid @enderror"
                                            name="vendedor_email" value="{{ old('vendedor_email') }}" required
                                            autocomplete="vendedor_email" autofocus>

                                        @error('vendedor_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vendedor_telefono"
                                            class="col-md-4 col-form-label text-md-right">telefono</label>

                                        <input id="vendedor_telefono" type="text"
                                            class="form-control @error('vendedor_telefono')  is-invalid @enderror"
                                            name="vendedor_telefono" value="{{ old('vendedor_telefono') }}" required
                                            autocomplete="vendedor_telefono" autofocus>
                                        @error('vendedor_telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <h3>DOMICIO PARTICULAR</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_calle"
                                            class="col-md-4 col-form-label text-md-right">Calle</label>

                                        <input id="vendedor_domicilio_calle" type="text"
                                            class="form-control @error('vendedor_domicilio_calle') is-invalid @enderror"
                                            name="vendedor_domicilio_calle" required
                                            autocomplete="vendedor_domicilio_calle">

                                        @error('vendedor_domicilio_calle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_numero"
                                            class="col-md-4 col-form-label text-md-right">No.</label>

                                        <input id="vendedor_domicilio_numero" type="text"
                                            class="form-control @error('vendedor_domicilio_numero') is-invalid @enderror"
                                            name="vendedor_domicilio_numero" required
                                            autocomplete="vendedor_domicilio_numero">

                                        @error('vendedor_domicilio_numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_interior"
                                            class="col-md-4 col-form-label text-md-right">Interior</label>

                                        <input id="vendedor_domicilio_interior" type="text"
                                            class="form-control @error('vendedor_domicilio_interior') is-invalid @enderror"
                                            name="vendedor_domicilio_interior" required
                                            autocomplete="vendedor_domicilio_interior">

                                        @error('vendedor_domicilio_interior')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_colonia"
                                            class="col-md-4 col-form-label text-md-right">Colonia</label>

                                        <input id="colonia" type="text"
                                            class="form-control @error('vendedor_domicilio_colonia') is-invalid @enderror"
                                            name="vendedor_domicilio_colonia" required
                                            autocomplete="vendedor_domicilio_colonia">

                                        @error('vendedor_domicilio_colonia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_municipio"
                                            class="col-md-4 col-form-label text-md-right">Municipio</label>

                                        <input id="vendedor_domicilio_municipio" type="text"
                                            class="form-control @error('vendedor_domicilio_municipio') is-invalid @enderror"
                                            name="vendedor_domicilio_municipio" required
                                            autocomplete="vendedor_domicilio_municipio">

                                        @error('vendedor_domicilio_municipio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_estado"
                                            class="col-md-4 col-form-label text-md-right">Estado</label>

                                        <input id="vendedor_domicilio_estado" type="text"
                                            class="form-control @error('vendedor_domicilio_estado') is-invalid @enderror"
                                            name="vendedor_domicilio_estado" required
                                            autocomplete="vendedor_domicilio_estado">

                                        @error('vendedor_domicilio_estado')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="vendedor_domicilio_cp"
                                            class="col-md-4 col-form-label text-md-right">CP</label>

                                        <input id="vendedor_domicilio_cp" type="text"
                                            class="form-control @error('vendedor_domicilio_cp') is-invalid @enderror"
                                            name="vendedor_domicilio_cp" required autocomplete="vendedor_domicilio_cp">

                                        @error('vendedor_domicilio_cp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <h2 class="bg-blue w-100">DATOS DE LA VIVIENDA</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_cuv" class="col-form-label text-md-right">CUV</label>

                                            <input id="vivienda_cuv" type="text"
                                                class="form-control @error('vivienda_cuv') is-invalid @enderror"
                                                name="vivienda_cuv" required autocomplete="vivienda_cuv">

                                            @error('vivienda_cuv')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_cuenta_predial"
                                                class=" col-form-label text-md-right">Cuenta Predial</label>

                                            <input id="vivienda_cuenta_predial" type="text"
                                                class="form-control @error('vivienda_cuenta_predial') is-invalid @enderror"
                                                name="vivienda_cuenta_predial" required
                                                autocomplete="vivienda_cuenta_predial">

                                            @error('vivienda_cuenta_predial')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_calle" class="col-form-label text-md-right">Calle</label>

                                            <input id="vivienda_calle" type="text"
                                                class="form-control @error('vivienda_calle') is-invalid @enderror"
                                                name="vivienda_calle" required autocomplete="vivienda_calle">

                                            @error('vivienda_calle')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_numero" class="col-form-label text-md-right">No.</label>

                                            <input id="vivienda_numero" type="text"
                                                class="form-control @error('vivienda_numero') is-invalid @enderror"
                                                name="vivienda_numero" required autocomplete="vivienda_numero">

                                            @error('vivienda_numero')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_interior"
                                                class="col-form-label text-md-right">Interior</label>

                                            <input id="vivienda_interior" type="text"
                                                class="form-control @error('vivienda_interior') is-invalid @enderror"
                                                name="vivienda_interior" required autocomplete="vivienda_interior">

                                            @error('vivienda_interior')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vivienda_colonia"
                                                class="col-form-label text-md-right">Colonia</label>

                                            <input id="vivienda_colonia" type="text"
                                                class="form-control @error('vivienda_colonia') is-invalid @enderror"
                                                name="vivienda_colonia" required autocomplete="vivienda_colonia">

                                            @error('vivienda_colonia')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                    </div>



                    <h2>Calles Referencia<span>- vivienda</span></h2>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="calle_uno" class="col-form-label text-md-right">Calle</label>
                                <input id="calle_uno" type="text" class="form-control" name="calle_uno">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="calle_dos" class="col-form-label text-md-right">Calle</label>
                                <input id="calle_dos" type="text" class="form-control" name="calle_dos">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_municipio" class="col-form-label text-md-right">Municipio</label>

                                <input id="vivienda_municipio" type="text"
                                    class="form-control @error('vivienda_municipio') is-invalid @enderror"
                                    name="vivienda_municipio" required autocomplete="vivienda_municipio">

                                @error('vivienda_municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_estado" class="col-form-label text-md-right">Estado</label>

                                <input id="vivienda_estado" type="text"
                                    class="form-control @error('vivienda_estado') is-invalid @enderror"
                                    name="vivienda_estado" required autocomplete="vivienda_estado">

                                @error('vivienda_estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_cp" class="col-form-label text-md-right">CP</label>

                                <input id="vivienda_cp" type="text"
                                    class="form-control @error('vivienda_cp') is-invalid @enderror" name="vivienda_cp"
                                    required autocomplete="vivienda_cp">

                                @error('vivienda_cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_manzana" class="col-form-label text-md-right">Manzana</label>

                                <input id="vivienda_manzana" type="text"
                                    class="form-control @error('vivienda_manzana') is-invalid @enderror"
                                    name="vivienda_manzana" required autocomplete="vivienda_manzana">

                                @error('vivienda_manzana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_lote" class="col-form-label text-md-right">lote</label>

                                <input id="vivienda_lote" type="text"
                                    class="form-control @error('vivienda_lote') is-invalid @enderror" name="vivienda_lote"
                                    required autocomplete="vivienda_lote">

                                @error('vivienda_lote')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_condominio" class="col-form-label text-md-right">Condominio</label>

                                <input id="vivienda_condominio" type="text"
                                    class="form-control @error('vivienda_condominio') is-invalid @enderror"
                                    name="vivienda_condominio" required autocomplete="vivienda_condominio">

                                @error('vivienda_condominio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_edificio" class="col-form-label text-md-right">Edificio</label>

                                <input id="vivienda_edificio" type="text" class="form-control " name="vivienda_edificio">


                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_nivel" class="col-form-label text-md-right">Nivel</label>
                                <input id="vivienda_edificio" type="text" class="form-control " name="vivienda_nivel">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="vivienda_entrada" class="col-form-label text-md-right">Entrada</label>

                                <input id="vivienda_entrada" type="text" class="form-control" name="vivienda_entrada">


                            </div>
                        </div>
                    </div>


                    <h2 class="bg-blue w-100">DATOS DE LA ESCRITURA</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="escritura_nombre_notario" class="col-form-label text-md-right">Nombre del
                                        notario</label>

                                    <input id="escritura_nombre_notario" type="text"
                                        class="form-control @error('cp') is-invalid @enderror"
                                        name="escritura_nombre_notario" required autocomplete="escritura_nombre_notario">

                                    @error('escritura_nombre_notario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="escritura_notario_numero" class=" col-form-label text-md-right">Notario
                                        No.</label>

                                    <input id="escritura_notario_numero" type="text"
                                        class="form-control @error('escritura_notario_numero') is-invalid @enderror"
                                        name="escritura_notario_numero" required autocomplete="escritura_notario_numero">

                                    @error('escritura_notario_numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="escritura_notario_distrito"
                                        class="col-form-label text-md-right">Distrito</label>

                                    <input id="escritura_notario_distrito" type="text"
                                        class="form-control @error('escritura_notario_distrito') is-invalid @enderror"
                                        name="escritura_notario_distrito" required
                                        autocomplete="escritura_notario_distrito">

                                    @error('escritura_notario_distrito')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_escritura" class="col-form-label text-md-right">Escritura</label>

                                    <input id="escritura_escritura" type="text"
                                        class="form-control @error('escritura_escritura') is-invalid @enderror"
                                        name="escritura_escritura" required autocomplete="escritura_escritura">

                                    @error('escritura_escritura')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_volumen" class="col-form-label text-md-right">Volumen</label>

                                    <input id="escritura_volumen" type="text"
                                        class="form-control @error('escritura_volumen') is-invalid @enderror"
                                        name="escritura_volumen" required autocomplete="escritura_volumen">

                                    @error('escritura_volumen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_folio_real" class="col-form-label text-md-right">Folio
                                        real</label>

                                    <input id="escritura_folio_real" type="text"
                                        class="form-control @error('escritura_folio_real') is-invalid @enderror"
                                        name="escritura_folio_real" required autocomplete="escritura_folio_real">

                                    @error('escritura_folio_real')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_insc" class="col-form-label text-md-right">INSC</label>

                                    <input id="escritura_insc" type="text"
                                        class="form-control @error('escritura_insc') is-invalid @enderror"
                                        name="escritura_insc" required autocomplete="escritura_insc">

                                    @error('escritura_insc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_folio" class="col-form-label text-md-right">Folio</label>

                                    <input id="escritura_folio" type="text"
                                        class="form-control @error('escritura_folio') is-invalid @enderror"
                                        name="escritura_folio" required autocomplete="escritura_folio">

                                    @error('escritura_folio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="escritura_libro" class="col-form-label text-md-right">Libro</label>

                                    <input id="escritura_libro" type="text"
                                        class="form-control @error('escritura_libro') is-invalid @enderror"
                                        name="escritura_libro" required autocomplete="escritura_libro">

                                    @error('escritura_libro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <h2 class="bg-blue w-100">Contacto para confirmar visita</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="confirmacion_visita_nombre"
                                        class="col-form-label text-md-right">nombre</label>

                                    <input id="confirmacion_visita_nombre" type="text"
                                        class="form-control @error('confirmacion_visita_nombre') is-invalid @enderror"
                                        name="confirmacion_visita_nombre" required
                                        autocomplete="confirmacion_visita_nombre">

                                    @error('confirmacion_visita_nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="confirmacion_visita_celular"
                                        class="col-form-label text-md-right">Celular</label>

                                    <input id="confirmacion_visita_celular" type="text"
                                        class="form-control @error('confirmacion_visita_celular') is-invalid @enderror"
                                        name="confirmacion_visita_celular" required
                                        autocomplete="confirmacion_visita_celular">

                                    @error('confirmacion_visita_celular')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="confirmacion_visita_correo"
                                        class="col-form-label text-md-right">Correo</label>

                                    <input id="confirmacion_visita_correo" type="email"
                                        class="form-control @error('confirmacion_visita_correo') is-invalid @enderror"
                                        name="confirmacion_visita_correo" required
                                        autocomplete="confirmacion_visita_correo">

                                    @error('confirmacion_visita_correo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

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
