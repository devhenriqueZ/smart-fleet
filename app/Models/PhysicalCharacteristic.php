<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalCharacteristic extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'tare',
        'capacity',
        'total_gross_weight',
        'height',
        'width',
        'lenght',
        'load_model_id',
        'automobile_id',
    ];
 
    public function automobiles()
    {
        return $this->belongsTo(Automobile::class, 'automobile_id', 'id'); 
    }

    public function load_model()
    {
        return $this->hasOne(LoadModel::class, 'load_model_id', 'id');
    }
}
