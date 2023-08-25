<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Challengerpro;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChallengerproPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the challengerpro can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list challengerpros');
    }

    /**
     * Determine whether the challengerpro can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function view(User $user, Challengerpro $model)
    {
        return $user->hasPermissionTo('view challengerpros');
    }

    /**
     * Determine whether the challengerpro can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create challengerpros');
    }

    /**
     * Determine whether the challengerpro can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function update(User $user, Challengerpro $model)
    {
        return $user->hasPermissionTo('update challengerpros');
    }

    /**
     * Determine whether the challengerpro can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function delete(User $user, Challengerpro $model)
    {
        return $user->hasPermissionTo('delete challengerpros');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete challengerpros');
    }

    /**
     * Determine whether the challengerpro can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function restore(User $user, Challengerpro $model)
    {
        return false;
    }

    /**
     * Determine whether the challengerpro can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Challengerpro  $model
     * @return mixed
     */
    public function forceDelete(User $user, Challengerpro $model)
    {
        return false;
    }
}
