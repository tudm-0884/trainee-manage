<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function staff_type()
    {
        return $this->belongsTo(StaffType::class, 'staff_type_id');
    }

    public function test()
    {
        return $this->hasMany(Test::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
