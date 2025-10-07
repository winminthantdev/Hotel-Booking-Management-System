<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() { return Staff::with('user')->get(); }
    public function store(Request $request) { return Staff::create($request->all()); }
    public function show(Staff $staff) { return $staff->load('user'); }
    public function update(Request $request, Staff $staff) { $staff->update($request->all()); return $staff; }
    public function destroy(Staff $staff) { $staff->delete(); return response()->json(null,204); }
}

?>