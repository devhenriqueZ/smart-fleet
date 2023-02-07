<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'cost',
        'automobile_cost_id'
    ];

    public function automobile_costs()
    {
        return $this->belongsTo(AutomobileCost::class, 'automobile_cost_id', 'id');
    }
}
 