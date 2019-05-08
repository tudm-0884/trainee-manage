<?php

namespace App\Repositories\Contracts;

use App\Repositories\TraineeRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Trainee;

class TraineeRepository extends BaseRepository implements TraineeRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  TraineeRepositoryInterface
     * @return void
     */
    public function __construct(Trainee $model)
    {
        parent::__construct($model);
    }
}
