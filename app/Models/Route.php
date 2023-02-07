<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    public function trips(){
        return $this->hasMany(Trip::class, 'route_id', 'id');
    }

    public function route_details()
    {
        return $this->hasMany(RouteDetail::class, 'route_id', 'id');
    }

    public function route_expenses()
    {
        return $this->hasMany(RouteExpense::class, 'route_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
