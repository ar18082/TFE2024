<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use CrudTrait;
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
