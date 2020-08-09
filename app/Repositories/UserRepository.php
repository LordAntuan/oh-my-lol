<?php

namespace App\Repositories;

use App\Contracts\ModelRepository;
use App\User;

class UserRepository implements ModelRepository
{
    /**
     * Performs a model find.
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return User::find($id);
    }

    /**
     * Performs a model create.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        return User::create($data);
    }

    /**
     * Performs a model update.
     *
     * @param $modelOrId
     * @param array $data
     * @return mixed
     */
    public function update($modelOrId, array $data)
    {
        if (User::class === get_class($modelOrId)) {
            return $modelOrId->update($data);
        }

        return $this->find($modelOrId)->update($data);
    }

    /**
     * Performs a model delete.
     *
     * @param $modelOrId
     * @return mixed
     */
    public function delete($modelOrId)
    {
        if (User::class === get_class($modelOrId)) {
            return $modelOrId->delete();
        }

        return $this->find($modelOrId)->delete();
    }

    /**
     * Performs a model restore.
     *
     * @param $modelOrId
     * @return mixed
     */
    public function restore($modelOrId)
    {
        if (User::class === get_class($modelOrId)) {
            return $modelOrId->restore();
        }

        return User::onlyTrashed()->find($modelOrId)->restore();
    }
}
