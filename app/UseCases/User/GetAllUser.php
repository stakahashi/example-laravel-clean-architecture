<?php
namespace App\UseCases\User;

use App\Repositories\UserRepository;

class GetAllUser
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * GetAllUser constructor.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->all();
    }
}
