<?php

namespace Tests\Shared;

use App\User;

class UserMother
{
    public const ROOT_ID = 1;

    public function getARootUser(): User
    {
        return User::find(self::ROOT_ID);
    }

    public function getARandomUser(string $type): User
    {
        return factory(User::class)->create(
            ['type' => $type]
        );
    }
}
