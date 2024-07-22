<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodPlan extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
