<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode_Localite extends Model
{
    use HasFactory;
    protected $table = 'postal_code_localite';
    protected $fillable = [
        'postCode',
        'localite'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'codePost', 'postCode');
    }
    public function cities()
    {
        return $this->hasMany(City::class, 'city_id');
    }
}
