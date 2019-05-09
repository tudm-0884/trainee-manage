<?php

namespace App\Repositories\Contracts;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * Create a new Repository instance.
     *
     * @param  UserRepositoryInterface
     * @return void
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function getCurrentUser()
    {
        return Auth::user();
    }
}
