<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index() { return Permission::all(); }
    public function store(Request $request) { return Permission::create($request->all()); }
    public function show(Permission $permission) { return $permission; }
    public function update(Request $request, Permission $permission) { $permission->update($request->all()); return $permission; }
    public function destroy(Permission $permission) { $permission->delete(); return response()->json(null,204); }
}


?>