@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('plugins.Sweetalert2', true)

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
                        <td>{{$device->id}}</td>
                        <td>{{$device->name}}</td>
                        <td>{{$device->description}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('/devices/'.$device->id.'/edit') }}" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="deleteForm-{{$device->id}}" action="{{ url('/devices/'.$device->id) }}" method="post" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar" onclick="confirmDelete({{$device}})">
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
            @if(session('success'))
                Swal.fire({
                    title: 'Mensaje',
                    text: '{{ session('success') }}',
                    icon: 'success'
                });
            @endif

            $('#devicesTable').DataTable({
                destroy : true,
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
            });
        });

        function confirmDelete(device) {
            Swal.fire({
                title: '¿Estás seguro?',
                html: 'Está por eliminar el dispositivo: <b>'+device.name+'</b> , Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envía el formulario para eliminar el dispositivo
                    document.getElementById('deleteForm-'+device.id).submit();
                }
            });


        }
    </script>
@stop
