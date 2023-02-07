<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure',
        'destination',
        'distance',
        'route_id',
    ]; 

    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }
}
