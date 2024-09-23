<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'date_activity',
        'visible_start',
        'visible_end',
        'nbr_children',

    ];

    public function babysitterUser()
    {
        return $this->belongsTo(BabysitterUser::class);
    }

    public function mount(Activity $activity): void
    {
        $this->form->fill($activity->toArray());
    }

    public function create(): void
    {
        Activity::create($this->form->getState());
    }

    public function activity_parent()
    {
        return $this->hasMany(Activity_parent::class);
    }


}
