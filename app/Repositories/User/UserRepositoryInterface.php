<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    /**
     * Retuns all user permissions.
     * 
     * @param string $user_id
     * @return mix
     */
    public function userAuthFormattedPermissions($user_id);
}
