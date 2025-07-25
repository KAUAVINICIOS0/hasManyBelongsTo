<?php

namespace App\Http\Controllers;

use App\Models\Service_type;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_types = Service_type::all();
        return view('types.index', [
            'service_types' => $service_types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service_type::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/service-types');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service_type $service_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service_type $service_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service_type $service_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service_type $service_type)
    {
        //
    }
}
