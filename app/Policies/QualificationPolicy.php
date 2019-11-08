<?php

namespace App\Policies;

use App\User;
use App\App\Models\Qualification;
use Illuminate\Auth\Access\HandlesAuthorization;

class QualificationPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any qualifications.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->permissions()->whereSlug('can_viewAny_qualification')->exists();
    }

    /**
     * Determine whether the user can view the qualification.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create qualifications.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions()->whereSlug('can_create_qualification')->exists();
    }

    /**
     * Determine whether the user can update the qualification.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->permissions()->whereSlug('can_edit_qualification')->exists();
    }

    /**
     * Determine whether the user can delete the qualification.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->permissions()->whereSlug('can_delete_qualification')->exists();
    }

    /**
     * Determine whether the user can restore the qualification.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the qualification.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
    /**
     * Determine whether the user can change status
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function status(User $user)
    {
        return $user->permissions()->whereSlug('can_change_status_qualification');
    }
}
