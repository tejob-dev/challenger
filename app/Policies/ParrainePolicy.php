<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Parraine;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParrainePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the parraine can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list parraines');
    }

    /**
     * Determine whether the parraine can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function view(User $user, Parraine $model)
    {
        return $user->hasPermissionTo('view parraines');
    }

    /**
     * Determine whether the parraine can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create parraines');
    }

    /**
     * Determine whether the parraine can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function update(User $user, Parraine $model)
    {
        return $user->hasPermissionTo('update parraines');
    }

    /**
     * Determine whether the parraine can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function delete(User $user, Parraine $model)
    {
        return $user->hasPermissionTo('delete parraines');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete parraines');
    }

    /**
     * Determine whether the parraine can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function restore(User $user, Parraine $model)
    {
        return false;
    }

    /**
     * Determine whether the parraine can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Parraine  $model
     * @return mixed
     */
    public function forceDelete(User $user, Parraine $model)
    {
        return false;
    }
}
