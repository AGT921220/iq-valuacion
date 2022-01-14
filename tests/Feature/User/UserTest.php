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

        $response = $this->get('/dashboard/usuarios/' . $user->id);
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
        $user = factory(User::class)->create();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/' . $otherUser->id);
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
        $userId = $user->id + 1;

        $response = $this->get('/dashboard/usuarios/' . $userId);
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
        $otherUser = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $response = $this->get('/dashboard/usuarios/' . $otherUser->id . '/edit');
        $response->assertStatus(200);
        $userResponse = $response->getOriginalContent()->user;
        $this->assertEquals($userResponse->id, $otherUser->id);

        $dataToEdit = $otherUser->toArray();
        $dataToEdit['type'] = User::PRINTER_ROLE;

        $response = $this->patchJson('/dashboard/usuarios/' . $otherUser->id, $dataToEdit);
        $user = User::where('id', $otherUser->id)->first();
        $this->assertEquals($user->type, User::PRINTER_ROLE);
        $response->assertStatus(302);
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
        $response = $this->get('/dashboard/usuarios/' . $otherUser->id . '/edit');
        $response->assertStatus(302);
    }

    /**
     *@test
     */
    public function cantEditUserWhenTheEmailIsRepeat()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );

        $dataToEdit = $otherUser->toArray();
        $dataToEdit['email'] = $user->email;

        $response = $this->patchJson('/dashboard/usuarios/' . $otherUser->id, $dataToEdit);
        $response->assertStatus(422)
            ->assertJsonStructure(
                [
                    'errors' => [
                        'email'
                    ]
                ]
            )
            ->assertJsonFragment([
                'errors' => [
                    'email' => [
                        User::REPEAT_EMAIL
                    ]
                ]
            ]);

        $user = User::findOrFail($otherUser->id);
        $this->assertNotEquals($dataToEdit['email'], $user->email);
    }

    /**
     *@test
     */
    public function cantEditUserWhenTheUserTypeIsInvalid()
    {
        $user = User::where('id', 1)->first();
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );

        $dataToEdit = $otherUser->toArray();
        $dataToEdit['type'] = 'Invalido';

        $response = $this->patchJson('/dashboard/usuarios/' . $otherUser->id, $dataToEdit);
        $response->assertStatus(422)
            ->assertJsonStructure(
                [
                    'errors' => [
                        'type'
                    ]
                ]
            )
            ->assertJsonFragment([
                'errors' => [
                    'type' => [
                        User::INVALID_TYPE
                    ]
                ]
            ]);

        $user = User::findOrFail($otherUser->id);
        $this->assertNotEquals($dataToEdit['type'], $user->type);
    }


    /**
     *@test
     */
    public function cantEditUserWhenTheUserIsNotAdmin()
    {
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $this->actingAs(
            $user
        );
        $otherUser = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );

        $dataToEdit = $otherUser->toArray();
        $dataToEdit['email'] = $user->email;

        $response = $this->patchJson('/dashboard/usuarios/' . $otherUser->id, $dataToEdit);
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


        $userData = $this->getUserData();
        $response = $this->post('/dashboard/usuarios', $userData);
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


    private function assertThatTheUsersExists(array $usersResponse): void
    {
        $users = User::where('type', '!=', User::ADMIN_ROLE)->get();
        $this->assertEquals(count($users), count($usersResponse));
    }

    private function getUserData(): array
    {
        return [
            'name' => 'Usuario',
            'paternal_surname' => 'Apellido Paterno',
            'maternal_surname' => 'Apellido Materno',
            'business' => 'Empresa',
            'email' => 'usuario@iq.com',
            'phone' => '6144950659',
            'type' => User::PRINTER_ROLE,
            'password' => 'usuario',
            'password_confirmation' => 'usuario',
        ];
    }
}
