<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Acquereur;
use Illuminate\Auth\Access\HandlesAuthorization;

class AcquereurPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the acquereur can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list acquereurs');
    }

    /**
     * Determine whether the acquereur can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function view(User $user, Acquereur $model)
    {
        return $user->hasPermissionTo('view acquereurs');
    }

    /**
     * Determine whether the acquereur can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create acquereurs');
    }

    /**
     * Determine whether the acquereur can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function update(User $user, Acquereur $model)
    {
        return $user->hasPermissionTo('update acquereurs');
    }

    /**
     * Determine whether the acquereur can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function delete(User $user, Acquereur $model)
    {
        return $user->hasPermissionTo('delete acquereurs');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete acquereurs');
    }

    /**
     * Determine whether the acquereur can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function restore(User $user, Acquereur $model)
    {
        return false;
    }

    /**
     * Determine whether the acquereur can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Acquereur  $model
     * @return mixed
     */
    public function forceDelete(User $user, Acquereur $model)
    {
        return false;
    }
}
