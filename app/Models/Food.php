<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $fillable = ['name', 'description', 'carbohydrates', 'protein', 'fat', 'image_url'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function foodConsumptions()
    {
        return $this->hasMany(UserFoodConsumption::class, 'food_id');
    }
}
