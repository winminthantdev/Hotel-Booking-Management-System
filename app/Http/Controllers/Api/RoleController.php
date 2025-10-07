<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() { return Role::all(); }
    public function store(Request $request) { return Role::create($request->all()); }
    public function show(Role $role) { return $role; }
    public function update(Request $request, Role $role) { $role->update($request->all()); return $role; }
    public function destroy(Role $role) { $role->delete(); return response()->json(null,204); }
}


?>