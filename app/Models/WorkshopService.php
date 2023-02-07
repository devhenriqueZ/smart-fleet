<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'observations',
        'user_id'
    ]; 

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function maintenance(){
        return $this->belongsTo(Maintenance::class, 'service_id','id');
    }
}
