<?php

namespace App\Repositories\Contracts;

use App\Repositories\ScheduleRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Schedule;

class ScheduleRepository extends BaseRepository implements ScheduleRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  ScheduleRepositoryInterface
     * @return void
     */
    public function __construct(Schedule $model)
    {
        parent::__construct($model);
    }
}
