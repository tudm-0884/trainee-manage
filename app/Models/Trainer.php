<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
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
    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
