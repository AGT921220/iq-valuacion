<?php

namespace Tests\Feature\InfonavitTest;

use App\User;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class InfonavitTest extends TestCase
{
    /**
     *@test
     */
    public function canCreateServiceInfonavit()
    {

        $this->beginARandomUser(User::CLIENT_ROLE);
        factory(User::class, 10)->create([
            'type' => User::APPRAISER_ROLE
        ]);
        $response = $this->get('/dashboard/servicios/infonavit/create');
        $response->assertStatus(200);
    }
}
