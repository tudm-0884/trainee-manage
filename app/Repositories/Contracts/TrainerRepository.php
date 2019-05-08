<?php

namespace App\Repositories\Contracts;

use App\Repositories\TrainerRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Trainer;

class TrainerRepository extends BaseRepository implements TrainerRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  TrainerRepositoryInterface
     * @return void
     */
    public function __construct(Trainer $model)
    {
        parent::__construct($model);
    }
}
