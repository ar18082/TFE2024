<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custody_criteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'custody_criteria',
        'description',
        'valide',

    ];
}
