<?php

namespace App\Policies;

use App\Commande;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CommandePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ( $user->getRole() == "admin" ) {
            return true;
        }
    }


    /**
     * Determine whether the user can view the commande.
     *
     * @param  \App\User  $user
     * @param  \App\Commande  $commande
     * @return mixed
     */
    public function view(User $user, Commande $commande)
    {
        return $user->id === $commande->user_id;
    }

}
