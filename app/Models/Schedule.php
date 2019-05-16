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
    public function courses()
    {
        return $this->hasMany(Course::class, 'schedule_id');
    }

    public function phases()
    {
        return $this->belongsToMany(Phase::class, 'phase_schedule', 'schedule_id', 'phase_id')->withPivot('priority', 'time_duration');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function staff_type()
    {
        return $this->belongsTo(StaffType::class, 'staff_type_id');
    }
}
