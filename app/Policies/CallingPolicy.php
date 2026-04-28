<?php

namespace App\Policies;

use App\Models\Calling;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CallingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(['client', 'technical', 'admin']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Calling $calling): bool
    {
        if($user->hasRole('client')) {
            return $user->id === $calling->client_id;
        }

        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Calling $calling): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Calling $calling): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Calling $calling): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Calling $calling): bool
    {
        return false;
    }
}
