<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'date',
        'maintenance_price',
        'service_id',
        'car_workshop_id',
        'automobile_id',
    ]; 

    public function workshop_services(){
        return $this->belongsTo(Maintenance::class, 'service_id', 'id');
    }

    public function car_workshop(){
        return $this->belongsTo(CarWorkshop::class, 'car_workshop_id', 'id');
    }

    public function automobiles(){
        return $this->belongsTo(Automobile::class, 'automobile_id', 'id');
    }
}
