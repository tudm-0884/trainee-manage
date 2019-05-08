<?php

namespace App\Repositories\Contracts;

use App\Repositories\StaffTypeRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\StaffType;

class StaffTypeRepository extends BaseRepository implements StaffTypeRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  StaffTypeRepositoryInterface
     * @return void
     */
    public function __construct(StaffType $model)
    {
        parent::__construct($model);
    }
}
