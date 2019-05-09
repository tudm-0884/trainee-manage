<?php

namespace App\Repositories\Contracts;

use App\Repositories\TestRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\Test;

class TestRepository extends BaseRepository implements TestRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  TestRepositoryInterface
     * @return void
     */
    public function __construct(Test $model)
    {
        parent::__construct($model);
    }
}
