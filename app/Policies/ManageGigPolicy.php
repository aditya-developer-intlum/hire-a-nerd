<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageGigPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any Gigs
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->permissions('can_viewAny_manage_gig')->exists();
    }

    /**
     * Determine whether the user can view the Gig
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->permissions('can_manage_gig_view')->exists();
    }
    /**
     * Determine whether the user can delete the Gig
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->permissions('can_delete_manage_gig')->exists();
    }

    /**
     * Determine whether the user can restore the Gig
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function accept(User $user)
    {
        return $user->permissions('can_manage_gig_accept')->exists();
    }

    /**
     * Determine whether the user can permanently delete the Gig
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function block(User $user)
    {
        return $user->permissions('can_manage_gig_block')->exists();
    }

    /**
     * Determine whether the user can change category status.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function suspend(User $user)
    {
        return $user->permissions('can_manage_gig_suspend')->exists();
    }
    /**
     *  Determine wheter the user can see earning.
     * 
     * @param \App\User $user
     * @return mixed
     */
    public function earning(User $user)
    {
        return $user->permissions('can_manage_gig_see_earning')->exists();
    }
}
