<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumptionCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'kt_qm_per_liter',
        'qt_tires',
        'vl_tire_unit',
        'tire_life',
        'automobile_cost_id'
    ];

    public function automobile_costs()
    {
        return $this->belongsTo(AutomobileCost::class, 'automobile_cost_id', 'id');
    }
}
