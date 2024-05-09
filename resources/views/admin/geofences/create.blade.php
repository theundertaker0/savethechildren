@extends('adminlte::page')

@section('title', 'Geocercas-Crear')

@section('content_header')
    <h1>Agregar Geocerca</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ $mode == 'create' ? route('geofences.store') : route('geofences.update', $geofence->id) }}">
                        @csrf
                        @if($mode == 'edit')
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $mode == 'edit' ? $geofence->name : '' }}">
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $mode == 'edit' ? trim($geofence->description) : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="map">Dibujar Geocerca</label>
                            <div id="map" style="height: 400px;"></div>
                            <input type="text" id="polygon" name="polygon" class="form-control">
                            @error('polygon')
                                <span class="invalid-feedback d-block">{{ $message }}</span>

                            @enderror
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
    <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
@stop

@section('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js">
    </script>
    <script>
        console.log("Valor de $mode:", {!! json_encode($mode) !!});
        @if($mode == 'edit')
            var isEditMode = true;
        @else
            var isEditMode = false;
        @endif
        console.log('hey',isEditMode);
        ///Setting the center of the map
        var center = [20.9673702,  -89.5925857];
        // Create the map
        var map = L.map('map').setView(center, 10);
        // Set up the Open Street Map layer
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            position: 'topright',
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'purple' //polygons being drawn will be purple color
                    },
                    allowIntersection: false,
                    drawError: {
                        color: 'orange',
                        timeout: 1000
                    },
                    showArea: true, //the area of the polygon will be displayed as it is drawn.
                    metric: false,
                    repeatMode: true
                },
                polyline: {
                    shapeOptions: {
                        color: 'red'
                    },
                },
                circlemarker: false, //circlemarker type has been disabled.
                rect: {
                    shapeOptions: {
                        color: 'green'
                    },
                },
                circle: false,
            },
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);
        if(isEditMode){
            //Converting the data
            var polygon = @JSON($geofence->polygon);
            console.log(polygon);

            //Parsing the data and adding the layer to map
            var layer = L.geoJSON(JSON.parse(polygon)).addTo(map);
            // Adjust map to show the Layer
            var bounds = layer.getBounds();
            map.fitBounds(bounds);
        }
        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;
            drawnItems.addLayer(layer);
            $('#polygon').val(JSON.stringify(layer.toGeoJSON())); //saving the layer to the input field using jQuery
        });
    </script>
@stop
