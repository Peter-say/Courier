<?php

namespace App\Policies;

use App\Models\User;

class ShipmentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $user)
{
    return in_array($user->role, ['Sudo', 'Admin']);
}
}
