<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Entities\User;

/**
 * Class UserRepository.
 *
 * @package namespace App\Repositories;
 */
class UserRepository implements UserRepositoryInterface
{
    public function all(): Collection
    {
        return User::all();
    }

    public function save($id = null, array $data): User
    {
        return User::updateOrCreate([
            'id' => $id
        ], $data);
    }
}
