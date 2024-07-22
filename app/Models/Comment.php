<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'note',
    ];

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }

    public function babysitterUser()
    {
        return $this->belongsTo(BabysitterUser::class);
    }
}
