<?php

namespace App\Contracts;

interface ModelRepository
{
    /**
     * Performs a model find.
     *
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Performs a model create.
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * Performs a model update.
     *
     * @param $modelOrId
     * @param array $data
     * @return mixed
     */
    public function update($modelOrId, array $data);

    /**
     * Performs a model delete.
     *
     * @param $modelOrId
     * @return mixed
     */
    public function delete($modelOrId);

    /**
     * Performs a model restore.
     *
     * @param $modelOrId
     * @return mixed
     */
    public function restore($modelOrId);
}
