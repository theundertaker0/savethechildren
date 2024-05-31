<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index() {
        $devices = Device::all();
        return view('admin.track.index',compact('devices'));
    }

    public function getTrack(Request $request)
    {

       $track  = Track::with('device')->where('device_id', $request->device_id)->latest()->first();
         // Verifica si se encontró un registro
         if ($track) {
            return response()->json($track);
        } else {
            return response()->json(['message' => 'No se encontraron registros para este dispositivo'], 404);
        }
    }
}
