<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function viewAdmin(User $user)
    {
        if ($user->roles == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function viewTrainer(User $user)
    {
        if ($user->roles == '2'){
            return true;
        } else {
            return false;
        }
    }

    public function viewTrainee(User $user)
    {
        if ($user->roles == '3'){
            return true;
        } else {
            return false;
        }
    }

    public function accessAdmin(User $user)
    {
        if ($user->roles <= '2'){
            return true;
        } else {
            return false;
        }
    }
}
