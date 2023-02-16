<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Multitenantable;

class Route extends Model
{
    use HasFactory, Multitenantable;
    
    protected $fillable = [
        'name',
        'description',
        'created_by_user_id'
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
        return $this->belongsTo(User::class, 'created_by_user_id', 'id');
    }
}
