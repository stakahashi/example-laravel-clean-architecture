<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Entities\User;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories;
 */
interface UserRepositoryInterface
{
    public function all(): Collection;
    public function save($id = null, array $data): User;
}
