<?php

namespace App\Repositories\Contracts;

use App\Repositories\UniversityRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\University;

class UniversityRepository extends BaseRepository implements UniversityRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  UniversityRepositoryInterface
     * @return void
     */
    public function __construct(University $model)
    {
        parent::__construct($model);
    }
}
