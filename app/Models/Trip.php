<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Multitenantable;

class Trip extends Model
{
    use HasFactory, Multitenantable;

    protected $fillable = [
        'trip_date',
        'trip_code',
        'ini_odometer',
        'end_odometer',
        'liter_price',
        'total_expense',
        'total_price',
        'fuel_type_id',
        'automobile_id',
        'created_by_user_id',
        'route_id',
    ]; 

    public function fuel_types()
    {
        return $this->hasOne(FuelType::class, 'fuel_type_id','id');
    }

    public function routes()
    {
        return $this->hasOne(Route::class, 'route_id','id');
    }

    public function automobiles()
    {
        return $this->hasOne(Automobile::class, 'automobile_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id','id');
    }

}
