namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            RoomTypeSeeder::class,
            RoomSeeder::class,
            ServiceSeeder::class,
            BookingSeeder::class,
            PaymentSeeder::class,
            StaffSeeder::class,
        ]);
    }
}
