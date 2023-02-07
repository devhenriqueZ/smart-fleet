<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ]; 

    public function physical_caracteristics(){
        return $this->belongsTo(PhysicalCharacteristic::class, 'load_model_id', 'id');
    }
}
