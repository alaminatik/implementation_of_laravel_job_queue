<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{   
   
    protected $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    /**
     * Get all users.
     *
     * @return user $user
     */
    public function getAll()
    {
        return $this->user
            ->get();
    }


}