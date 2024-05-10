@extends('adminlte::page')

@section('title', 'Geocercas-ver')

@section('content_header')
    <h1>Ver Geocerca</h1>
@stop

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Nombre:</strong> {{ $geofence->name }}
                                </div>
                                <div class="col-md-12">
                                    <strong>Descripción:</strong> {{ $geofence->description }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div id="map" style="height: 400px;"></div>
                        </div>
                        <div class="col-md-12 mt-4 text-center">
                            <a href="{{route('geofences.index')}}" class = "btn btn-primary"><i class="fas fa-chevron-left"></i>&nbsp;Regresar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
@stop

@section('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js">
</script>
     <script>
        /// MAP MODULE
        var center = [20.9673702,  -89.5925857];
        // Create the map
        var map = L.map('map').setView(center, 10);
        // Set up the OSM layer
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
        //Converting the data
        var polygon = @JSON($geofence->polygon);
        console.log(polygon);

        //Parsing the data and adding the layer to map
        var layer = L.geoJSON(JSON.parse(polygon)).addTo(map);
        // Adjust map to show the Layer
        var bounds = layer.getBounds();
        map.fitBounds(bounds);
    </script>
@stop
