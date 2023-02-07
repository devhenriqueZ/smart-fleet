<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarWorkshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email', 
        'observations',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class, 'car_workshop_id', 'id');
    }
}
