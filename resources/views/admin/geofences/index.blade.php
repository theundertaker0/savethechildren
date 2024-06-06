@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('plugins.Sweetalert2', true)

@section('title', 'Geocercas')

@section('content_header')
    <h1>Geocercas</h1>
@stop

@section('content')
   <div class="container mt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{url('/geofences/create')}}" class="btn btn-primary"><i class="fas fa-plus">&nbsp;Agregar Geocerca</i></a>
        </div>
        <div class="col-12 mt-4">
            <x-adminlte-datatable id="geofencesTable" :heads="$geofencesHeads">
                @foreach ($geofences as $geofence)
                    <tr>
                        <td>{{$geofence->name}}</td>
                        <td>{{$geofence->description}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('/geofences/'.$geofence->id) }}" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Ver Detalles">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('/geofences/'.$geofence->id.'/edit') }}" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="deleteForm-{{$geofence->id}}" action="{{ url('/geofences/'.$geofence->id) }}" method="post" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar" onclick="confirmDelete({{$geofence}})">
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

            $('#geofencesTable').DataTable({
                destroy : true,
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
            });
        });

        function confirmDelete(geofence) {
            Swal.fire({
                title: '¿Estás seguro?',
                html: 'Está por eliminar el la geocerca: <b>'+geofence.name+'</b> , Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarla',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envía el formulario para eliminar el dispositivo
                    document.getElementById('deleteForm-'+geofence.id).submit();
                }
            });


        }

    </script>
@stop
