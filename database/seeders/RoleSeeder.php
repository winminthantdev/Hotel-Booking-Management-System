namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            ['name' => 'Admin'],
            ['name' => 'Receptionist'],
            ['name' => 'Customer'],
            ['name' => 'Manager'],
        ]);
    }
}
