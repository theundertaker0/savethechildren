@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Dispositivos')

@section('content_header')
    <h1>Dispositivos</h1>
@stop

@section('content')
   <div class="container mt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{url('/devices/create')}}" class="btn btn-primary"><i class="fas fa-plus">&nbsp;Agregar Dispositivo</i></a>
        </div>
        <div class="col-12 mt-4">
            <x-adminlte-datatable id="devicesTable" :heads="$devicesHeads">
                @foreach ($devices as $device)
                    <tr>
                        <td>{{$device->name}}</td>
                        <td>{{$device->description}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('/devices/'.$device->id.'/edit') }}" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ url('/devices/'.$device->id) }}" method="post" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
   </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#devicesTable').DataTable({
                destroy : true,
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
            });
        });
    </script>
@stop
