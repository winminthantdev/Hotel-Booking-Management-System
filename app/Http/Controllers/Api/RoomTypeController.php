<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index() { return RoomType::all(); }
    public function store(Request $request) { return RoomType::create($request->all()); }
    public function show(RoomType $roomType) { return $roomType; }
    public function update(Request $request, RoomType $roomType) { $roomType->update($request->all()); return $roomType; }
    public function destroy(RoomType $roomType) { $roomType->delete(); return response()->json(null,204); }
}


?>