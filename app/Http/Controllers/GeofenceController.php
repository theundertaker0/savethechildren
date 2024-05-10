<?php

namespace App\Http\Controllers;

use App\Models\Geofence;
use Illuminate\Http\Request;

class GeofenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $geofencesHeads = [
            'Nombre',
            'Descripción',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 5],
        ];

        $geofences = Geofence::all();
        return view('admin.geofences.index',compact('geofencesHeads','geofences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.geofences.create',['mode' => 'create','geofence' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'polygon' => 'required'
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'polygon.required' => 'Debe dibujar una geocerca.',
        ]);

        Geofence::create($request->all());
        return redirect()->route('geofences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $geofence = Geofence::find($id);

        return view('admin.geofences.show',compact('geofence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $geofence = Geofence::find($id);
        return view('admin.geofences.create', ['mode' => 'edit', 'geofence' => $geofence]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $geofence = Geofence::find($id);
        $geofence->delete();
        return redirect()->route('geofences.index');
    }
}
