<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->permissions()->whereSlug('can_viewAny_category')->exists();
    }

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions()->whereSlug('can_create_category')->exists();
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->permissions()->whereSlug('can_edit_category')->exists();
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->permissions()->whereSlug('can_delete_category')->exists();
    }

    /**
     * Determine whether the user can restore the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }

    /**
     * Determine whether the user can change category status.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function status(User $user)
    {
        return $user->permissions()->whereSlug('can_change_status_category')->exists();
    }
}
