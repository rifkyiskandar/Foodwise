<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietStrategy extends Model
{
    use HasFactory;

    protected $table = 'diet_strategies';
    protected $fillable = ['user_id', 'current_weight', 'target_weight', 'strategy', 'estimated_time', 'consumption_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function foodConsumption()
    {
        return $this->belongsTo(UserFoodConsumption::class);
    }
}
