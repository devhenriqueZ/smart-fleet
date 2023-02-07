<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepreciationCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'capital_annual_cost',
        'annual_depreciation_rate',
        'automobile_cost_id'
    ];
 
    public function automobile_costs()
    {
        return $this->belongsTo(AutomobileCost::class, 'automobile_cost_id', 'id');
    }
}
