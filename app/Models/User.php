<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\URL;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;

class User extends Authenticatable implements MustVerifyEmailContract
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles, MustVerifyEmail;

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
        'unsucessefulAttempt',
        'banned',
        'inscriptConf',
        'postal_code_localite_id',
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

    public function postal_code_localite()
    {
        return $this->belongsTo(PostalCode_Localite::class,  'postal_code_localite_id');
    }

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }

    public function babySitterUser()
    {
        return $this->belongsTo(BabysitterUser::class, 'babysitter_user_id');
    }

    public function custodyCriteria()
    {
        return $this->belongsToMany(Custody_criteria::class, 'babysitter_custodies', 'user_id', 'criteria_id');
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

    public function sendEmailVerificationNotification()
    {
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $this->id, 'hash' => sha1($this->email)]
        );

        $this->notify(new VerifyEmailNotification($verificationUrl));
    }
}
