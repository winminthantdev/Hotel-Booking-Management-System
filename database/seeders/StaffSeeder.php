namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    public function run()
    {
        Staff::insert([
            ['user_id' => 2, 'position' => 'Receptionist'],
            ['user_id' => 1, 'position' => 'Manager'],
        ]);
    }
}
