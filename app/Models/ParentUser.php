<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentUser extends Model
{
    use HasFactory;
    protected $fillable = ['nbr_children'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity_parent::class);
    }


}
