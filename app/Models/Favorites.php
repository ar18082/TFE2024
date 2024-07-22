<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use CrudTrait;
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
