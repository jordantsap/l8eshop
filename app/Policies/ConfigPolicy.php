<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConfigPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the company.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return in_array($user->role_id, [1,2]);
    }
}
