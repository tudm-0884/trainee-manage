<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Course extends Model
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
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }

    /**
     * Mutators at here.
     *
     * @return 
     */
    public function getStartDateAttribute($value)
    {
        return $this->attributes['start_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getEndDateAttribute($value)
    {
        return $this->attributes['end_date'] = Carbon::parse($value)->format('Y-m-d');
    }
}
