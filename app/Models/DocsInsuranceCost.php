<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocsInsuranceCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking',
        'rcf_insurance',
        'annual_insurance',
        'ipva_depvat_licenc',
        'automobile_cost_id',
    ];

    public function automobile_costs()
    {
        return $this->belongsTo(AutomobileCost::class, 'automobile_cost_id', 'id');
    }
}
 