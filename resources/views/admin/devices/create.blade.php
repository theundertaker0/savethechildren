@extends('adminlte::page')

@section('title', 'Dispositivos')

@section('content_header')
    <h1>{{ $mode == 'create' ? 'Agregar dispositivo' : 'Editar dispositivo'}}</h1>
@stop

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{$mode}}</p>
                    <form method="POST" action="{{ $mode == 'create' ? route('devices.store') : route('devices.update', $device->id) }}">
                        @csrf
                        @if($mode == 'edit')
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $mode == 'edit' ? $device->name : '' }}">
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $mode == 'edit' ? trim($device->description) : '' }}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ $mode == 'create' ? 'Crear' : 'Actualizar' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
