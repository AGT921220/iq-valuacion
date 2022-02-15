<?php

namespace Tests\Feature\Client;

use App\User;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    private const CLIENT_PASSWORD = 'password';

    /**
     *@test
     */
    public function canRegisterClient()
    {
        $userData = $this->getUserData();

        $response = $this->callCreateClient($userData);
        $response->assertStatus(302);
        $this->assertCreateUser($userData);
    }

    /**
     *@test
     */
    public function canRegisterClientWithPhoto()
    {
        $userData = $this->getUserData();
        $userData['user_profile'] = UploadedFile::fake()->create('fakefile.jpg', 100);
        $response = $this->callCreateClient($userData);
        $response->assertStatus(302);
        $this->assertCreateUser($userData);
    }

    /**
     *@test
     */
    public function canLoginClient()
    {
        $client = factory(User::class)->create(
            [
                'password' => Hash::make(self::CLIENT_PASSWORD),
                'type' => User::CLIENT_ROLE
            ]
        );
        $loginData = [
            'email' => $client['email'],
            'password' => self::CLIENT_PASSWORD
        ];

        $response = $this->callLogin($loginData);
        $response->assertStatus(302);
        $response = $this->get('/login');
        $response->assertStatus(302);
    }


    /**
     *@test
     */
    public function cantLoginClient()
    {
        $client = factory(User::class)->create(
            [
                'password' => Hash::make(self::CLIENT_PASSWORD),
                'type' => User::CLIENT_ROLE
            ]
        );
        $loginData = [
            'email' => $client['email'],
            'password' => self::CLIENT_PASSWORD . '1'
        ];

        $response = $this->callLogin($loginData);
        $response->assertStatus(422);
        $response = $this->get('/home');
    }



    private function assertCreateUser(array $userData): void
    {

        $this->assertTrue(User::where('type', User::CLIENT_ROLE)
            ->where('email', $userData['email'])
            ->where('name', $userData['name'])
            ->exists());
    }

    private function callCreateClient(array $userData): TestResponse
    {
        return $this->postJson('register', $userData);
    }

    private function callLogin(array $loginData): TestResponse
    {
        return $this->postJson('login', $loginData);
    }

    private function getUserData(): array
    {
        return [
            'name' => 'Cliente',
            'paternal_surname' => 'Apellido Paterno',
            'maternal_surname' => 'Apellido Materno',
            'business' => 'Empresa',
            'email' => 'cliente@iq.com',
            'phone' => '6144950659',
            'type' => User::CLIENT_ROLE,
            'password' => 'Cliente',
        ];
    }
}
