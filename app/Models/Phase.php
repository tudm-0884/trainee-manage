<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
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
    public function schedules()
    {
        return $this->belongsToMany(Schedule::class, 'schedule_phase', 'phase_id', 'schedule_id')->withPivot('priority', 'time_duration');
    }
}
