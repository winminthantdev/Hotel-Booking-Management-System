namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() { return Room::with('roomType')->get(); }
    public function store(Request $request) { return Room::create($request->all()); }
    public function show(Room $room) { return $room->load('roomType'); }
    public function update(Request $request, Room $room) { $room->update($request->all()); return $room; }
    public function destroy(Room $room) { $room->delete(); return response()->json(null,204); }
}
