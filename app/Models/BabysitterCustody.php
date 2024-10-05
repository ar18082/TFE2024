<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabysitterCustody extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function CustodyCriteria()
    {
        return $this->belongsTo(Custody_criteria::class, 'criteria_id');
    }
}
