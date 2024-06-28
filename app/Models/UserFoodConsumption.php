<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFoodConsumption extends Model
{
    use HasFactory;

    protected $table = 'user_food_consumptions';
    protected $fillable = ['user_id', 'food_id', 'consumption_date', 'quantity', 'total_calories'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }

    public function dietStrategy()
    {
        return $this->hasOne(DietStrategy::class, 'consumption_id');
    }
}
