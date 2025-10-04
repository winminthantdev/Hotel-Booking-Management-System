namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::insert([
            ['name' => 'Laundry', 'price' => 10],
            ['name' => 'Room Service', 'price' => 20],
            ['name' => 'Airport Pickup', 'price' => 30],
            ['name' => 'Spa Treatment', 'price' => 50],
        ]);
    }
}
