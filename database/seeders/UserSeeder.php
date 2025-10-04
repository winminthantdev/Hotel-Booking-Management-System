namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Receptionist User',
            'email' => 'reception@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2
        ]);

        User::factory()->count(10)->create(); // if you have a factory
    }
}
