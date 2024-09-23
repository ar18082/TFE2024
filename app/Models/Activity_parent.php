<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_parent extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'nbr_children',
        'parent_user_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function parentUser()
    {
        return $this->belongsTo(ParentUser::class);
    }
}
