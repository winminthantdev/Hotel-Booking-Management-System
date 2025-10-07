namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        RoomType::insert([
            ['name' => 'Single Room', 'description' => '1 bed, basic amenities'],
            ['name' => 'Double Room', 'description' => '2 beds, standard amenities'],
            ['name' => 'Deluxe Room', 'description' => 'King bed, luxury amenities'],
            ['name' => 'Suite', 'description' => 'Luxury suite with living room'],
        ]);
    }
}
