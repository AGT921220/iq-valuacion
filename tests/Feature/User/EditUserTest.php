<?php

namespace Tests\Feature\User;

use App\User;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class EditUserTest extends TestCase
{


    /**
     *@test
     */
    public function canEditUser()
    {

        $this->beginARootUser();
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $response = $this->get('/dashboard/usuarios/' . $user->id . '/edit');
        $response->assertStatus(200);
        $userResponse = $response->getOriginalContent()->user;
        $this->assertEquals($userResponse->id, $user->id);

        $dataToEdit = $user->toArray();
        $dataToEdit['type'] = User::PRINTER_ROLE;

        $response = $this->patchJson('/dashboard/usuarios/' . $user->id, $dataToEdit);
        $user = User::where('id', $user->id)->first();
        $this->assertEquals($user->type, User::PRINTER_ROLE);
        $response->assertStatus(302);
    }

    /**
     *@test
     */
    public function cantEditUser()
    {
        $this->beginARandomUser();
        $user = factory(User::class)->create();
        $response = $this->get('/dashboard/usuarios/' . $user->id . '/edit');
        $response->assertStatus(302);
    }

    /**
     *@test
     */
    public function cantEditUserWhenTheEmailIsRepeat()
    {
        $this->beginARootUser();
        $user = $this->getARootUser();
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
        $this->beginARootUser();
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );

        $dataToEdit = $user->toArray();
        $dataToEdit['type'] = 'Invalido';

        $response = $this->patchJson('/dashboard/usuarios/' . $user->id, $dataToEdit);
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

        $user->refresh();

        $this->assertNotEquals($dataToEdit['type'], $user->type);
    }


    /**
     *@test
     */
    public function cantEditUserWhenTheUserIsNotAdmin()
    {

        $this->beginARandomUser(User::APPRAISER_ROLE);
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $otherUser = $this->getARandomUser(User::APPRAISER_ROLE);
        $dataToEdit = $user->toArray();
        $dataToEdit['email'] = $otherUser->email;

        $response = $this->patchJson('/dashboard/usuarios/' . $user->id, $dataToEdit);
        $response->assertStatus(302);
    }
}
