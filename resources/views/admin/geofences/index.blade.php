@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Geocercas')

@section('content_header')
    <h1>Geocercas</h1>
@stop

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <x-adminlte-datatable id="geofencesTable" :heads="$geofencesHeads">
                <tbody>
                    @foreach ($geofences as $geofence)
                        <tr>
                            <td>{{$geofence->name}}</td>
                            <td>{{$geofence->description}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
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
            $('#geofencesTable').DataTable({
"language": {
"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
}
});
        });
    </script>
@stop
