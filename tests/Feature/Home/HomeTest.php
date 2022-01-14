<?php

namespace Tests\Feature\Home;

use App\User;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class HomeTest extends TestCase
{

    private const CLIENT_PASSWORD = 'password';

    /**
     *@test
     */
    public function canShowHome()
    {
        $client = factory(User::class)->create(
            [
                'password' => Hash::make(self::CLIENT_PASSWORD),
                'type' => User::CLIENT_ROLE
            ]
        );
        $loginData = [
            'email'=> $client['email'],
            'password'=>self::CLIENT_PASSWORD
        ];
        $response = $this->callLogin($loginData);
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    private function callLogin(array $loginData):TestResponse
    {
        return $this->postJson('login', $loginData);
    }

}
