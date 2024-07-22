<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
    ];

    public function goodPlan()
    {
        return $this->belongsTo(GoodPlan::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
