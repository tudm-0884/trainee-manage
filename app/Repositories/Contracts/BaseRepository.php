<?php

namespace App\Repositories\Contracts;

use App\Repositories\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * The interface repository instance.
     */
    protected $model;

    /**
     * Create a new Repository instance.
     *
     * @param  $model
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get all Collection of instance
     * @param  array  $relation
     * @return Colection
     */
    public function all($relation = [])
    {
        return $this->model->with($relation)->get();
    }

    /**
     * Get all small sliced Collection of instance
     * @param  array  $relation
     * @param  int $number
     * @return Colection
     */
    public function paginate($relation = [], $number)
    {
        return $this->model->with($relation)->paginate($number)->get();
    }

    /**
     * Create a new instance of the given model
     * @param  array $data
     * @return instance
     */
    public function store($data)
    {
        return $this->model->create($data);
    }

    /**
     * Get instance by id
     * @param  array  $relation
     * @param  int $id
     * @return instance
     */
    public function get($relation = [], $id)
    {
        return $this->model->with($relation)->find($id);
    }

    /**
     * Update instance by id
     * @param  array  $data
     * @param  int $id
     * @return instance
     */
    public function update($data, $id)
    {
        $model = $this->get([], $id);
        
        return $model->update($data);
    }

    /**
     * Delete instance by id
     * @param  int $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
