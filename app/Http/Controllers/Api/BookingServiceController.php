namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookingService;
use Illuminate\Http\Request;

class BookingServiceController extends Controller
{
    public function index() { return BookingService::with(['booking','service'])->get(); }
    public function store(Request $request) { return BookingService::create($request->all()); }
    public function show(BookingService $bookingService) { return $bookingService->load(['booking','service']); }
    public function update(Request $request, BookingService $bookingService) { $bookingService->update($request->all()); return $bookingService; }
    public function destroy(BookingService $bookingService) { $bookingService->delete(); return response()->json(null,204); }
}
