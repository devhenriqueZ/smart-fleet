<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Multitenantable;

class CarWorkshop extends Model
{
    use HasFactory, Multitenantable;

    protected $fillable = [
        'name',
        'phone_number',
        'email', 
        'observations',
        'created_by_user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id', 'id');
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class, 'car_workshop_id', 'id');
    }
}
