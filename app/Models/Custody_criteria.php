<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Custody_criteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'custody_criteria',
        'description',
        'valide',

    ];

    protected $relations = [
        'users',
        'babysitter_custody',
    ];


    protected $guarded = [
        'id',
        'created_at',
        'updated_at',

    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'babysitter_custody', 'criteria_id', 'user_id');
    }

}
