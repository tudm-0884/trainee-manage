<?php

namespace App\Repositories\Contracts;

use App\Repositories\ResultRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Result;

class ResultRepository extends BaseRepository implements ResultRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  ResultRepositoryInterface
     * @return void
     */
    public function __construct(Result $model)
    {
        parent::__construct($model);
    }
}
