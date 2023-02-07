<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteExpense extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'vl_expense',
        'expense_type_id',
        'route_id',
    ];

    public function expenses_type()
    {
        return $this->hasOne(ExpenseType::class, 'expense_type_id','id');
    }

    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }
}
