<?php

namespace Tests\Feature\User;

use App\User;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class CreateUserTest extends TestCase
{

    /**
     *@test
     */
    public function canCreateUser()
    {

        $this->beginARootUser();
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(200);
        $userData = $this->getUserData();
        $response = $this->post('/dashboard/usuarios', $userData);
        $response->assertStatus(302);
        $this->assertTrue(User::where('email', $userData['email'])->exists());
    }

    /**
     *@test
     */
    public function cantCreateUser()
    {
        $this->beginARandomUser();
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(302);
        $userData = $this->getUserData();
        $response = $this->post('/dashboard/usuarios', $userData);
        $response->assertStatus(302);
        $this->assertNotTrue(User::where('email', $userData['email'])->exists());
    }


    /**
     *@test
     */
    public function cantCreateUserWhenTypeIsInvalid()
    {
        $this->beginARootUser();
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(200);
        $userData = $this->getUserData();
        $userData['type'] = 'Invalido';
        $response = $this->postJson('/dashboard/usuarios', $userData);
        $response->assertStatus(422)
            ->assertJsonStructure(
                [
                    'errors' => [
                        'type'
                    ]
                ]
            )->assertJsonFragment([
                'errors' => [
                    'type' => [
                        User::INVALID_TYPE
                    ]
                ]
            ]);
        $this->assertNotTrue(User::where('email', $userData['email'])->exists());
    }


        /**
     *@test
     */
    public function cantCreateUserWhenThePasswordsAreNotEquals()
    {
        $this->beginARootUser();
        $response = $this->get('/dashboard/usuarios/create');
        $response->assertStatus(200);
        $userData = $this->getUserData();
        $userData['password_confirmation'] = 'Invalido';
        $response = $this->postJson('/dashboard/usuarios', $userData);
        $response->assertStatus(422)
            ->assertJsonStructure(
                [
                    'errors' => [
                        'password'
                    ]
                ]
            )->assertJsonFragment([
                'errors' => [
                    'password' => [
                        User::PASSWORDS_NOT_EQUALS
                    ]
                ]
            ]);
        $this->assertNotTrue(User::where('email', $userData['email'])->exists());
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
