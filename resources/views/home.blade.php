@extends('adminlte::page')

@section('title', 'Save the Children')

@section('content_header')

<div class="row">
    <div class="col-12 mb-4">
        <h1>¡Bienvenido!</h1>
    </div>
</div>

@stop

@section('content')
    <div class="container">
        <div class="row text-center mt-4">
            <div class="col-12 text-center">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0 p-2">
                      <div class="col-md-4">
                        <img src="{{asset("/vendor/adminlte/dist/img/savethechildrenLogo.png")}}" class="img-fluid rounded-start" alt="Sav the Children Logo">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body text-center">
                          <h3 class="card-text">Save the Children</h3>
                          <h4 class="card-text">¡Bienvenido al sistema de Geolocalización "Save the Children"!</h4>
                          <h5 class="card-text">Utilice el menú lateral izquierdo para navegar por nuestras opciones</h5>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop
