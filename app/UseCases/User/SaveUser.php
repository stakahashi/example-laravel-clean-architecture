<?php
namespace App\UseCases\User;

use App\Repositories\UserRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class SaveUser
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * SaveUser constructor.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($id = null, array $data)
    {
        if (Arr::has($data, 'password')) {
            $data['password'] = Hash::make($data['password']);
        }

        return $this->repository->save($id, $data);
    }
}
