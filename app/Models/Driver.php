<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ic_type',
        'phone_number',
        'cpf_cnpj',
        'cnh',
        'cnh_category',
        'expiration_date',
        'salary',
        'user_id'
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function labor_cost()
    {
        return $this->hasMany(LaborCost::class, 'driver_id', 'id');

    }
}
