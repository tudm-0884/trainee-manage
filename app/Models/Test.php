<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Test extends Model
{
    use Notifiable;
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
    protected $attributes = [
        'mark' => 0,
    ];

    public function trainee()
    {
        return $this->belongsTo(Trainee::class, 'trainee_id');
    }

    public function phase()
    {
        return $this->belongsTo(Phase::class, 'phase_id');
    }
}
