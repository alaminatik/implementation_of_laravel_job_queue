<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    /**
     * @var $userRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function getAll()
    {
        return $this->userRepository->getAll();
    }

}