<?php

namespace App\Repositories;

interface UniversityRepositoryInterface
{
    /**
     * Get all collection of instance
     * @param  array  $relation
     * @return colection
     */
    public function all(array $relation);

    /**
     * Get all small sliced collection of instance
     * @param  array  $relation
     * @param  int $number
     * @return colection
     */
    public function paginate(array $relation, $number);

    /**
     * Create a new instance of the given model
     * @param  array $data
     * @return instance
     */
    public function store(array $data);

    /**
     * Get instance by id
     * @param  array  $relation
     * @param  int $id
     * @return instance
     */
    public function get(array $relation, $id);

    /**
     * Update instance by id
     * @param  array  $data
     * @param  int $id
     * @return instance
     */
    public function update(array $data, $id);

    /**
     * Delete instance by id
     * @param  int $id
     * @return int|boolean
     */
    public function delete($id);
}
