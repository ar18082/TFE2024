<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geographic_coodinate extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude',
        'longitude',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
