namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::insert([
            ['room_number' => '101', 'room_type_id' => 1, 'price' => 50, 'status' => 'available'],
            ['room_number' => '102', 'room_type_id' => 2, 'price' => 80, 'status' => 'available'],
            ['room_number' => '201', 'room_type_id' => 3, 'price' => 120, 'status' => 'booked'],
            ['room_number' => '301', 'room_type_id' => 4, 'price' => 200, 'status' => 'maintenance'],
        ]);
    }
}
