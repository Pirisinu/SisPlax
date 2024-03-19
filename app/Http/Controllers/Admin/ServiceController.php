<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $services = Service::all();
        return view('admin.my_services.dashboardAllServices', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.my_services.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $service = Service::where('id', $id)->firstOrFail();
        /* AUTH CONTROL */
        if (auth()->user()->isAdmin == false) {
            abort(404, 'Not Found');
        }
        return view("admin.my_services.show", compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.my_services.show');

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
    public function destroy($id)
    {
        $service = Service::where('id', $id)->firstOrFail();
        $service->delete();
        return redirect()->route('admin.dashboard-services')->with('success',"Il servizio è stato eliminato correttamente");
    }
}
