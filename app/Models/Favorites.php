<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class, 'parentUser_id');
    }

    public function babysitterUser()
    {
        return $this->belongsTo(BabysitterUser::class, 'babysitterUser_id');
    }

}
