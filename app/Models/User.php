<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'password',
        'phoneNumber',
        'adressStreet',
        'adressNumber',
        'roleAdmin',
        'roleSuperAdmin',
        'roleParent',
        'roleBabySitter',
        'unsucessefulAttempt',
        'banned',
        'inscriptConf'
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
        'password' => 'hashed',
    ];

    public function getRoleAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setRoleAttribute($value)
    {
        $this->attributes['role'] = json_encode($value);
    }

    public function geographic_coodinates()
    {
        return $this->hasOne(Geographic_coodinate::class);
    }

    public function postalCode_Localite()
    {
        return $this->hasOne(PostalCode_Localite::class);
    }

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }

    public function babySitterUser()
    {
        return $this->belongsTo(BabySitterUser::class);
    }

    public function goodPlan()
    {
        return $this->hasMany(GoodPlan::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function response()
    {
        return $this->hasMany(Response::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
