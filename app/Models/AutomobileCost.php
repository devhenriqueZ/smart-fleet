<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomobileCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'vl_automobile',
        'estimated_mileage',
        'automobile_id'
    ];

    public function labor_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function maintenance_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function consumption_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function docs_insurance_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function depreciation_costs()
    {
        return $this->hasOne(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function other_costs()
    {
        return $this->hasMany(AutomobileCost::class, 'automobile_id', 'id');
    }

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class, 'automobile_id', 'id');
    }
}
