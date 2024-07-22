<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'date_activity',
        'visible_start',
        'visible_end',
        'nbr_children',

    ];

    public function babysitterUser()
    {
        return $this->belongsTo(BabysitterUser::class);
    }
}
