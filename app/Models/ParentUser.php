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
        return $this->belongsTo(User::class);
    }
}
