<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Relationship at here.
     *
     * @return 
     */
    public function schedule()
    {
        return $this->hasMany(Course::class, 'schedule_id');
    }

    public function phases()
    {
        return $this->belongsToMany(Phase::class, 'schedule_phase', 'schedule_id', 'phase_id')->withPivot('priority', 'time_duration');
    }
}
