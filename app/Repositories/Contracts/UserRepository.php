<?php

namespace App\Repositories\Contracts;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\Contracts\BaseRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword($data, $id)
    {
        if ($data['password'] === $data['password_confirmation']) {
            $user = $this->model->findOrFail($id);
            $user->update([
                'password' => Hash::make($data['password']),
            ]);

            return true;
        } else {
            return false;
        }
    }
}
