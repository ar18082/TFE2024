<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabysitterUser extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class, 'babysitter_user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'babysitter_user_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'babysitter_user_id');
    }





}
