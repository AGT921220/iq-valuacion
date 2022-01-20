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

                    <form method="POST" action="/dashboard/usuarios" enctype="multipart/form-data">
                        @csrf
                        <h2 class="bg-blue w-100">Solicitante</h2>

                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-right">Nombre</label>
            
                                        <input id="name" type="text"
                                            class="form-control @error('name')  is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
            
                                    </div>
            
                                </div>
                           <div class="col-md-4">
                            <div class="form-group">
                                <label for="paternal_surname" class=" col-form-label text-md-right">Apellido
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

                           </div>
                            
    
                           <div class="col-md-4">
                            <div class="form-group ">
                                <label for="maternal_surname" class="col-form-label text-md-right">Apellido
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
    
                        </div>
                           </div>
                           
                        
<div class="row">
    <div class="col-md-6">
        <div class="form-group ">
            <label for="email" class="col-md-4 col-form-label text-md-right">RFC</label>
    
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
    
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
                          
    <div class="col-md-6">
    
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">CURP</label>
    
                <input id="phone" type="number"
                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}" required autocomplete="email">
    
                @error('phone')
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
            <label for="nss" class="col-md-4 col-form-label text-md-right">NSS</label>

                <input id="phone" type="number"
                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}" required autocomplete="email">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
    <div class="col-md-4">

        <div class="form-group ">
            <label for="phone" class="col-md-4 col-form-label text-md-right">TELEFONO</label>

            <input id="phone" type="number"
                class="form-control @error('phone') is-invalid @enderror" name="phone"
                value="{{ old('phone') }}" required autocomplete="phone">

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="passwemailord" class="col-md-4 col-form-label text-md-right">EMAIL</label>
    
                <input id="password" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    required autocomplete="new-password">
    
                @error('email')
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
                                        <label for="calle" class="col-md-4 col-form-label text-md-right">Calle</label>
                
                                            <input id="calle" type="text"
                                                class="form-control @error('calle') is-invalid @enderror" name="calle"
                                                required autocomplete="new-calle">
                
                                            @error('calle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>       
                                </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="numero" class="col-md-4 col-form-label text-md-right">No.</label>
                
                                            <input id="numero" type="text"
                                                class="form-control @error('calle') is-invalid @enderror" name="numero"
                                                required autocomplete="new-numero">
                
                                            @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="interior" class="col-md-4 col-form-label text-md-right">Interior</label>
                
                                            <input id="interior" type="text"
                                                class="form-control @error('interior') is-invalid @enderror" name="interior"
                                                required autocomplete="new-interior">
                
                                            @error('interior')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="colonia" class="col-md-4 col-form-label text-md-right">Colonia</label>
                
                                            <input id="colonia" type="text"
                                                class="form-control @error('colonia') is-invalid @enderror" name="colonia"
                                                required autocomplete="new-interior">
                
                                            @error('colonia')
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
                                <label for="Municipio" class="col-md-4 col-form-label text-md-right">Municipio</label>
        
                                    <input id="Municipio" type="text"
                                        class="form-control @error('Municipio') is-invalid @enderror" name="Municipio"
                                        required autocomplete="new-Municipio">
        
                                    @error('Municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>
        
                                    <input id="estado" type="text"
                                        class="form-control @error('estado') is-invalid @enderror" name="estado"
                                        required autocomplete="new-estado">
        
                                    @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cp" class="col-md-4 col-form-label text-md-right">CP</label>
        
                                    <input id="cp" type="text"
                                        class="form-control @error('cp') is-invalid @enderror" name="cp"
                                        required autocomplete="new-estado">
        
                                    @error('cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

    
                       <div class="row">
                        <h2 class="bg-blue">VENDEDOR</h2>

                           <div class="col-md-4">
                            <div class="form-group">
                            <label for="name_vendedor" class="col-form-label text-md-right">Nombre</label>

                            <input id="name_vendedor" type="text"
                                class="form-control @error('name_vendedor')  is-invalid @enderror" name="name_vendedor"
                                value="{{ old('name_vendedor') }}" required autocomplete="name_vendedor" autofocus>

                            @error('name_vendedor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="ap_vendedor" class="col-form-label text-md-right">Apellido Paterno</label>

                        <input id="ap_vendedor" type="text"
                            class="form-control @error('ap_vendedor')  is-invalid @enderror" name="ap_vendedor"
                            value="{{ old('ap_vendedor') }}" required autocomplete="ap_vendedor" autofocus>

                        @error('ap_vendedor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-4">
                        <div class="form-group">
                        <label for="am_vendedor" class="col-form-label text-md-right">Apellido Materno</label>

                        <input id="am_vendedor" type="text"
                            class="form-control @error('am_vendedor')  is-invalid @enderror" name="am_vendedor"
                            value="{{ old('am_vendedor') }}" required autocomplete="am_vendedor" autofocus>

                        @error('am_vendedor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>
        



                <div class="row">
                  
                       <div class="col-md-6">
                        <div class="form-group">
                        <label for="rfc_vendedor" class="col-md-4 col-form-label text-md-right">RFC</label>

                        <input id="rfc_vendedor" type="text"
                            class="form-control @error('rfc_vendedor')  is-invalid @enderror" name="rfc_vendedor"
                            value="{{ old('rfc_vendedor') }}" required autocomplete="rfc_vendedor" autofocus>

                        @error('rfc_vendedor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="curp_vendedor" class="col-md-4 col-form-label text-md-right">CURP</label>

                    <input id="curp_vendedor" type="text"
                        class="form-control @error('curp_vendedor')  is-invalid @enderror" name="curp_vendedor"
                        value="{{ old('curp_vendedor') }}" required autocomplete="curp_vendedor" autofocus>

                    @error('curp_vendedor')
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
                 <label for="email_vendedor" class="col-md-4 col-form-label text-md-right">EMAIL</label>

                 <input id="email_vendedor" type="text"
                     class="form-control @error('email_vendedor')  is-invalid @enderror" name="email_vendedor"
                     value="{{ old('email_vendedor') }}" required autocomplete="email_vendedor" autofocus>

                 @error('email_vendedor')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror

             </div>
         </div>

         <div class="col-md-6">
             <div class="form-group">
             <label for="telefono_vendedor" class="col-md-4 col-form-label text-md-right">telefono</label>

             <input id="telefono_vendedor" type="text"
                 class="form-control @error('telefono_vendedor')  is-invalid @enderror" name="telefono_vendedor"
                 value="{{ old('telefono_vendedor') }}" required autocomplete="telefono_vendedor" autofocus>
             @error('telefono_vendedor')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror

         </div>
     </div>
            </div>

            <h3>DOMICIO PARTICULAR<span>vendedor</span></h3>
            <div class="row">
                     <div class="col-md-3">
                         <div class="form-group">
                             <label for="vendedor_calle" class="col-md-4 col-form-label text-md-right">Calle</label>
     
                                 <input id="vendedor_calle" type="text"
                                     class="form-control @error('vendedor_calle') is-invalid @enderror" name="vendedor_calle"
                                     required autocomplete="new-vendedor_calle">
     
                                 @error('vendedor_calle')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>       
                     </div>

                 <div class="col-md-3">
                         <div class="form-group">
                             <label for="vendedor_numero" class="col-md-4 col-form-label text-md-right">No.</label>
     
                                 <input id="vendedor_numero" type="text"
                                     class="form-control @error('vendedor_numero') is-invalid @enderror" name="vendedor_numero"
                                     required autocomplete="new-vendedor_numero">
     
                                 @error('vendedor_numero')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                     </div>

                     <div class="col-md-3">
                         <div class="form-group">
                             <label for="dom_vendedor_interior" class="col-md-4 col-form-label text-md-right">Interior</label>
     
                                 <input id="dom_vendedor_interior" type="text"
                                     class="form-control @error('dom_vendedor_interior') is-invalid @enderror" name="dom_vendedor_interior"
                                     required autocomplete="new-dom_vendedor_interior">
     
                                 @error('dom_vendedor_interior')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                     </div>

                     <div class="col-md-3">
                         <div class="form-group">
                             <label for="dom_vendedor_colonia" class="col-md-4 col-form-label text-md-right">Colonia</label>
     
                                 <input id="colonia" type="text"
                                     class="form-control @error('dom_vendedor_colonia') is-invalid @enderror" name="dom_vendedor_colonia"
                                     required autocomplete="new-dom_vendedor_colonia">
     
                                 @error('dom_vendedor_colonia')
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
                     <label for="dom_vendedor_municipio" class="col-md-4 col-form-label text-md-right">Municipio</label>

                         <input id="dom_vendedor_municipio" type="text"
                             class="form-control @error('dom_vendedor_municipio') is-invalid @enderror" name="dom_vendedor_municipio"
                             required autocomplete="new-dom_vendedor_municipio">

                         @error('dom_vendedor_municipio')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="form-group">
                     <label for="dom_vendedor_estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                         <input id="dom_vendedor_estado" type="text"
                             class="form-control @error('dom_vendedor_estado') is-invalid @enderror" name="dom_vendedor_estado"
                             required autocomplete="new-dom_vendedor_estado">

                         @error('dom_vendedor_estado')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="form-group">
                     <label for="dom_vendedor_cp" class="col-md-4 col-form-label text-md-right">CP</label>

                         <input id="cp" type="text"
                             class="form-control @error('cp') is-invalid @enderror" name="dom_vendedor_cp"
                             required autocomplete="new-dom_vendedor_cp">

                         @error('dom_vendedor_cp')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                 </div>
             </div>
         </div>



         <h2 class="bg-blue w-100">DATOS DE LA ESCRITURA</h3>
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nombre_notario" class="col-form-label text-md-right">Nombre del notario</label>

                        <input id="nombre_notario" type="text"
                            class="form-control @error('cp') is-invalid @enderror" name="nombre_notario"
                            required autocomplete="new-nombre_notario">

                        @error('nombre_notario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="notario_numero" class=" col-form-label text-md-right">Notario No.</label>

                        <input id="notario_numero" type="text"
                            class="form-control @error('cp') is-invalid @enderror" name="notario_numero"
                            required autocomplete="new-notario_numero">

                        @error('notario_numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="distrito" class="col-form-label text-md-right">Distrito</label>

                        <input id="distrito" type="text"
                            class="form-control @error('distrito') is-invalid @enderror" name="distrito"
                            required autocomplete="new-distrito">

                        @error('distrito')
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
            <label for="escritura" class="col-form-label text-md-right">Escritura</label>

                <input id="escritura" type="text"
                    class="form-control @error('escritura') is-invalid @enderror" name="escritura"
                    required autocomplete="new-escritura">

                @error('escritura')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="volumen" class="col-form-label text-md-right">Volumen</label>

                <input id="volumen" type="text"
                    class="form-control @error('volumen') is-invalid @enderror" name="volumen"
                    required autocomplete="new-volumen">

                @error('volumen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="folio_real" class="col-form-label text-md-right">Folio real</label>

                <input id="folio_real" type="text"
                    class="form-control @error('folio_real') is-invalid @enderror" name="folio_real"
                    required autocomplete="new-folio_real">

                @error('folio_real')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="insc" class="col-form-label text-md-right">INSC</label>

                <input id="insc" type="text"
                    class="form-control @error('insc') is-invalid @enderror" name="insc"
                    required autocomplete="new-insc">

                @error('insc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="folio" class="col-form-label text-md-right">Folio</label>

                <input id="folio" type="text"
                    class="form-control @error('folio') is-invalid @enderror" name="folio"
                    required autocomplete="new-folio">

                @error('folio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="libro" class="col-form-label text-md-right">Libro</label>

                <input id="libro" type="text"
                    class="form-control @error('libro') is-invalid @enderror" name="libro"
                    required autocomplete="new-libro">

                @error('libro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
</div>


<div class="row">
    <h2 class="bg-blue w-100">Contacto para confirmar visita</h2>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nombre_visita" class="col-form-label text-md-right">nombre</label>

                <input id="nombre_visita" type="text"
                    class="form-control @error('nombre_visita') is-invalid @enderror" name="nombre_visita"
                    required autocomplete="new-nombre_visita">

                @error('nombre_visita')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="visita_cel" class="col-form-label text-md-right">Celular</label>

                <input id="visita_cel" type="text"
                    class="form-control @error('visita_cel') is-invalid @enderror" name="visita_cel"
                    required autocomplete="new-visita_cel">

                @error('visita_cel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="visita_correo" class="col-form-label text-md-right">Correo</label>

                <input id="visita_correo" type="text"
                    class="form-control @error('visita_correo') is-invalid @enderror" name="visita_correo"
                    required autocomplete="new-visita_correo">

                @error('visita_correo')
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