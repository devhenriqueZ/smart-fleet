<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'cleaning',
        'accessories',
        'automobile_cost_id'
    ]; 

    public function automobile_costs()
    {
        return $this->belongsTo(AutomobileCost::class, 'automobile_cost_id', 'id');
    }
}
