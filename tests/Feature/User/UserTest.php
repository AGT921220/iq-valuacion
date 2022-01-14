<?php

namespace Tests\Feature\User;

use App\User;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     *@test
     */
    public function canIndexUsers()
    {
        
        $this->beginARootUser();
        factory(User::class, 10)->create();
        $response = $this->get('/dashboard/usuarios');
        $response->assertStatus(200);
        $usersResponse = $response->getOriginalContent()->users->toArray();
        $this->assertThatTheUsersExists($usersResponse);
    }

    /**
     *@test
     */
    public function cantIndexUsers()
    {
        $this->beginARandomUser();
        $response = $this->get('/dashboard/usuarios');
        $response->assertStatus(302);
    }


    /**
     *@test
     */
    public function canShowUserWhenTheUserIsAdmin()
    {
        $this->beginARootUser();
        $user = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(200);
        $userResponse = $response->getOriginalContent()->user;
        $this->assertEquals($userResponse->id, $user->id);
        $this->assertEquals($userResponse->id, $user->id);
    }

    /**
     *@test
     */
    public function canShowUser()
    {
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $response = $this->get('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(200);
        $userResponse = $response->getOriginalContent()->user;
        $this->assertEquals($userResponse->id, $user->id);
    }

    /**
     *@test
     */
    public function cantShowUser()
    {
        $this->beginARandomUser();
        $user = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(302);
    }

    /**
     *@test
     */
    public function cantShowUserIfNotExist()
    {
        $this->beginARandomUser();
        $user = factory(User::class)->create();
        $userId = $user->id + 1;
        $response = $this->get('/dashboard/usuarios/' . $userId);
        $response->assertStatus(302);
    }

    private function assertThatTheUsersExists(array $usersResponse): void
    {
        $users = User::where('type', '!=', User::ADMIN_ROLE)->get();
        $this->assertEquals(count($users), count($usersResponse));
    }

}
