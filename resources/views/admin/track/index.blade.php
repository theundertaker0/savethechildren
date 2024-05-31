@extends('adminlte::page')

@section('title', 'Seguimiento')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Seguimiento</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="name">Dispositivos</label>
                <select type="text" class="form-control select2" id="device" name="device">
                    <option></option>
                    @foreach($devices as $device)
                    <option value="{{ $device->id }}">{{ $device->name }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <div id="map" style="height: 620px;"></div>
        </div>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@stop

@section('js')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $('.select2').select2({
            placeholder: "Selecciona un dispositivo para mostrar su última ubicación",
            theme: "bootstrap"
        });

        $('#device').on('select2:select', function (e) {
            var data = e.params.data;
            if(data){
                $.ajax({
                    type: "POST",
                    url : "/track/get",
                    data : {device_id : data.id},
                    dataType : 'json',
                    success : function(res){
                        var defaultMarkerIcon = L.icon({
                            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [1, -34],
                        });

                        console.log('res-> ',res)
                        // Extract latitude and longitude from the data
                        var lat = parseFloat(res.lat);
                        var lng = parseFloat(res.lng);

                        // Create a marker and add it to the map
                        var marker = L.marker([lat, lng],  { icon: defaultMarkerIcon }).addTo(map);

                        // Set the view of the map to the marker's location and set a suitable zoom level
                        map.setView([lat, lng], 14);

                        // Optionally, you can add a popup to the marker
                        let fecha = null;
                        let hora = null;
                        if(res.created_at){
                            // Extrae la fecha de la cadena de fecha y hora
                            fecha = res.created_at.split('T')[0];
                            hora = res.created_at.split('T')[1].split('.')[0];
                            // Formatea la fecha en formato dd/mm/YYYY
                            let partesFecha = fecha.split('-');
                            fecha = partesFecha[2] + '/' + partesFecha[1] + '/' + partesFecha[0];
                        }
                        let window = `
                            Dispositivo: ${res.device.name} <br>
                            Descripción: ${res.device.description != null ? res.device.description : 'No disponible'}<br>
                            Fecha: ${fecha != null ? fecha : 'No disponible'} <br>
                            Hora : ${hora != null ? hora : 'No disponible'}

                        `
                        marker.bindPopup(window).openPopup();
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 404) {
                            Swal.fire({
                            title: 'Advertencia!',
                            text: xhr.responseJSON.message,
                            icon: "warning",
                            confirmButtonText: 'Aceptar'
                            });
                        } else {
                            console.log('Error:', error);
                            // Manejo de otros tipos de errores
                            alert('Error ' + xhr.status + ': ' + error);
                        }
                    }
                });
            }
        });
    });
     ///Setting the center of the map
     var center = [20.9673702,  -89.5925857];
        // Create the map
        map = L.map('map').setView(center, 11);
        // Set up the Open Street Map layer
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
</script>
@stop

