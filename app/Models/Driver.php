<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Multitenantable;

class Driver extends Model
{
    use HasFactory, Multitenantable;

    protected $fillable = [
        'name',
        'ic_type',
        'phone_number',
        'cpf_cnpj',
        'cnh',
        'cnh_category',
        'expiration_date',
        'salary',
        'created_by_user_id'
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id', 'id');
    }

    public function labor_cost()
    {
        return $this->hasMany(LaborCost::class, 'driver_id', 'id');

    }
}
