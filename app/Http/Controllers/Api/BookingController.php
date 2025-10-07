<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() { return Booking::with(['user','room'])->get(); }
    public function store(Request $request) { return Booking::create($request->all()); }
    public function show(Booking $booking) { return $booking->load(['user','room']); }
    public function update(Request $request, Booking $booking) { $booking->update($request->all()); return $booking; }
    public function destroy(Booking $booking) { $booking->delete(); return response()->json(null,204); }
}

?>
