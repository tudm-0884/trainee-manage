<?php

namespace App\Repositories\Contracts;

use App\Repositories\CourseRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Course;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  CourseRepositoryInterface
     * @return void
     */
    public function __construct(Course $model)
    {
        parent::__construct($model);
    }
}
