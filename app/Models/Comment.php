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
        return $this->belongsTo(User::class, 'parent_user_id');
    }

    public function babysitterUser()
    {
        return $this->belongsTo(BabysitterUser::class);
    }
}
