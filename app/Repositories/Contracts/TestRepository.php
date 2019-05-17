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

    public function all($relation = [])
    {
        return $this->model->with($relation)->where('status', '<>', config('constants.new'))->get();
    }

    public function updateContent($data, $id)
    {
        $model = $this->get([], $id);
        if ($model->status == config('constants.new')) {
            $data['status'] = config('constants.resolved');
        } elseif ($model->status == config('constants.not_achieved')) {
            $data['status'] = config('constants.resend');
        }

        return $model->update($data);
    }
}
