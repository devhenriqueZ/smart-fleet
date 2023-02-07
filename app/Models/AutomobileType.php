<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomobileType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
    ];

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class, 'automobile_type_id', 'id');
    }
}
