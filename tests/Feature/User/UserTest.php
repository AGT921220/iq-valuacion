<?php

namespace Tests\Feature\User;

use App\User;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class UserTest extends TestCase
{

    private const CLIENT_PASSWORD = 'password';

    /**
     *@test
     */
    public function canIndexUsers()
    {
        $user = User::where('id', 1)->first();
        factory(User::class, 10)->create();
        $this->actingAs(
            $user
        );
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
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $response = $this->get('/dashboard/usuarios');
        $response->assertStatus(302);
    }


        /**
     *@test
     */
    public function canShowUserWhenTheUserIsAdmin()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $user = factory(User::class)->create();

        $response = $this->get('/dashboard/usuarios/'.$user->id);
        $response->assertStatus(200);        
        $userResponse = $response->getOriginalContent()->user;  
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
        $response = $this->get('/dashboard/usuarios/'.$user->id);
        $response->assertStatus(200);        
        $userResponse = $response->getOriginalContent()->user;  
        $this->assertEquals($userResponse->id, $user->id);
    }

    /**
     *@test
     */
    public function cantShowUser()
    {
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/'.$otherUser->id);
        $response->assertStatus(302);        
    }

        /**
     *@test
     */
    public function cantShowUserIfNotExist()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $user = factory(User::class)->create();
        $userId = $user->id+1;

        $response = $this->get('/dashboard/usuarios/'.$userId);
        $response->assertStatus(302);        
 
    }


    /**
     *@test
     */
    public function canEditUser()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/'.$otherUser->id.'/edit');
        $response->assertStatus(200);
        $userResponse = $response->getOriginalContent()->user;  
        $this->assertEquals($userResponse->id, $otherUser->id);
    }

    /**
     *@test
     */
    public function cantEditUser()
    {
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/'.$otherUser->id.'/edit');
        $response->assertStatus(302);
    }


            /**
     *@test
     */
    public function canCreateUser()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(200);
    }

        /**
     *@test
     */
    public function cantCreateUser()
    {
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(302);
    }


    private function assertThatTheUsersExists(array $usersResponse):void
    {
        $users = User::where('type', '!=', User::ADMIN_ROLE)->get();
        $this->assertEquals(count($users), count($usersResponse));
    }

}
