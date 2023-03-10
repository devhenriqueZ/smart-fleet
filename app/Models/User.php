<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'img_profile',
        'phone_number',
        'cpf_cnpj',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class, 'created_by_user_id','id');
    }

    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class, 'created_by_user_id','id');
    }

    public function workshop_services(): HasMany
    {
        return $this->hasMany(WorkshopService::class, 'created_by_user_id','id');
    }

    public function car_workshop(): HasMany
    {
        return $this->hasMany(CarWorkshop::class, 'created_by_user_id','id');
    }

    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class, 'created_by_user_id','id');
    }

    public function expense_types(): HasMany
    {
        return $this->hasMany(ExpensesType::class, 'created_by_user_id','id');
    }
    
    public function automobiles(): HasMany
    {
        return $this->hasMany(Automobile::class, 'created_by_user_id','id');
    }
}
