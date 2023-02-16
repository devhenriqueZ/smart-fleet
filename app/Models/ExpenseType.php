<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ]; 

    public function route_expenses()
    {
        return $this->belongsTo(RouteExpense::class, 'expense_type_id', 'id');
    }
} 
