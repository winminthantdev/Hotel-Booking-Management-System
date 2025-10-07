namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        Payment::insert([
            ['booking_id' => 1, 'amount' => 100, 'method' => 'credit_card', 'status' => 'paid'],
            ['booking_id' => 2, 'amount' => 240, 'method' => 'cash', 'status' => 'pending'],
        ]);
    }
}
