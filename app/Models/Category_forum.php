<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_forum extends Model
{
    use HasFactory;
    protected $table = 'categories_forum';

    protected $fillable = ['name'];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
