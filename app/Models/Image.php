<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use CrudTrait;
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
