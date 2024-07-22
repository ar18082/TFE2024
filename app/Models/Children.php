<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'firstname',
        'Date_of_birth',

    ];

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }

    public function secondParentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }

}
