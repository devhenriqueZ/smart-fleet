<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'license_plate',
        'brand',
        'model',
        'chassis',
        'renavam',
        'yy_manufacture',
        'yy_model',
        'color',
        'motor',
        'power',
        'observations',
        'automobile_type_id',
        'fuel_type_id',
        'user_id'
    ]; 


    public function physical_caracteristics()
    {
        return $this->hasOne(PhysicalCharacteristic::class, 'automobile_id', 'id');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class, 'automobile_id', 'id');
    }

    public function automobile_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function maintenance(){
        return $this->hasMany(Maintenance::class, 'automobile_id', 'id');
    }
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
