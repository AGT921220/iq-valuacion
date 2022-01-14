<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Shared\UserMother;

abstract class TestCase extends BaseTestCase
{
    // protected $connectionsToTransact=[
    //     'testing'
    // ];
    use CreatesApplication;
    use DatabaseTransactions;

    public function beginARootUser()
    {
        $this->actingAs(
            $this->getARootUser()
        );
    }

    public function beginARandomUser(string $type = User::REVIEWER_ROLE)
    {
        $this->actingAs(
            $this->getARandomUser($type)
        );
    }

    public function getARootUser(): User
    {
        return (new UserMother)->getARootUser();
    }
    public function getARandomUser(string $type): User
    {
        return (new UserMother)->getARandomUser($type);
    }
}
