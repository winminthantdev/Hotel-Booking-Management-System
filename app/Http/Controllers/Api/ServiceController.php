<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() { return Service::all(); }
    public function store(Request $request) { return Service::create($request->all()); }
    public function show(Service $service) { return $service; }
    public function update(Request $request, Service $service) { $service->update($request->all()); return $service; }
    public function destroy(Service $service) { $service->delete(); return response()->json(null,204); }
}


?>