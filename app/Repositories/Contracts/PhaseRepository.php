<?php

namespace App\Repositories\Contracts;

use App\Repositories\PhaseRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Phase;

class PhaseRepository extends BaseRepository implements PhaseRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  PhaseRepositoryInterface
     * @return void
     */
    public function __construct(Phase $model)
    {
        parent::__construct($model);
    }
}
