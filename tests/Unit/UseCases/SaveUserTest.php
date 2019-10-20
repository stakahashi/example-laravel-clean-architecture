<?php

namespace Tests\Unit\UseCases;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Entities\User;
use App\UseCases\User\SaveUser;

class SaveUserTest extends TestCase
{
    use WithFaker;

    public function testCreateUser()
    {
        $useCase = app()->make(SaveUser::class);

        $user = factory(User::class)->make();
        $result = $useCase(null, $user->toArray());

        $this->assertEquals($result->name, $user->name);
    }

    public function testUpdateUser()
    {
        $useCase = app()->make(SaveUser::class);

        $user = factory(User::class)->create();
        $user->name = $this->faker->name;

        $result = $useCase($user->id, $user->toArray());

        $this->assertEquals($result->name, $user->name);
    }
}
