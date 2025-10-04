namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = ['name', 'description', 'price'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
