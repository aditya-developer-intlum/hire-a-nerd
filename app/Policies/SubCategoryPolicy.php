<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubCategoryPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any sub menus.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
      return $user->permissions()->whereSlug('can_viewAny_sub_category')->exists();
    }

    /**
     * Determine whether the user can view the sub menu.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create sub menus.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions()->whereSlug('can_create_sub_category')->exists();
    }

    /**
     * Determine whether the user can update the sub menu.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->permissions()->whereSlug('can_edit_sub_category')->exists();
    }

    /**
     * Determine whether the user can delete the sub menu.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->permissions()->whereSlug('can_delete_sub_category')->exists();
    }

    /**
     * Determine whether the user can restore the sub menu.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the sub menu.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
    /**
     * Determine whether the user can change Status.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function status(User $user)
    {
        return $user->permissions()->whereSlug('can_change_status_sub_category')->exists();
    }
}
