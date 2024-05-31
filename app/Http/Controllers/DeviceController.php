<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devicesHeads = [
            'Nombre',
            'Descripción',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 5],
        ];

        $devices = Device::all();
        return view('admin.devices.index',compact('devicesHeads','devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.devices.create',['mode' => 'create','device' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
        ]);

        Device::create($request->all());
        return redirect()->route('devices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $device = Device::find($id);

        return view('admin.devices.show',compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $device = Device::find($id);
        return view('admin.devices.create', ['mode' => 'edit', 'device' => $device]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
        ]);

        $device = Device::find($id);

        $device->update($request->all());
        return redirect()->route('devices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $device = device::find($id);
        $device->delete();
        return redirect()->route('devices.index');
    }
}
