<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode_Localite extends Model
{
    use HasFactory;
    protected $table = 'postal_code__localites';
    protected $fillable = [
        'postCode',
        'localite',
        'city_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'postal_code_localite_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'city_id');
    }
}
