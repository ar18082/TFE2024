<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabysitterCustody extends Model
{
    use HasFactory;

    public function babysitter()
    {
        return $this->belongsTo(BabysitterUser::class);
    }

    public function custody_criteria()
    {
        return $this->belongsTo(Custody_criteria::class);
    }
}
