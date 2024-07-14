<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'city_id');
    }
    public function postalCode_Localite()
    {
        return $this->belongsTo(PostalCode_Localite::class);
    }
}
