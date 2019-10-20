<?php

namespace Tests\Unit\UseCases;

use Tests\TestCase;
use App\Entities\User;
use App\UseCases\User\GetAllUser;

class GetAllUserTest extends TestCase
{
    public function testGetAll()
    {
        factory(User::class)->create();

        $useCase = app()->make(GetAllUser::class);

        $this->assertNotEmpty($useCase());
    }
}
