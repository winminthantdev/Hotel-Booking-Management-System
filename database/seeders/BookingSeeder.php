namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run()
    {
        Booking::insert([
            ['user_id' => 3, 'room_id' => 1, 'check_in' => now(), 'check_out' => now()->addDays(2), 'status' => 'confirmed'],
            ['user_id' => 3, 'room_id' => 2, 'check_in' => now(), 'check_out' => now()->addDays(3), 'status' => 'pending'],
        ]);
    }
}
