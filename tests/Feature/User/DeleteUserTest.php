<?php

namespace Tests\Feature\User;

use App\User;
use Illuminate\Http\UploadedFile;
use PHPUnit\Framework\Test;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{


    /**
     *@test
     */
    public function canDeleteUser()
    {
        $this->beginARootUser();
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $response = $this->delete('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(302);
        $this->assertNotTrue(User::where('id', $user->id)->exists(), 'El usuario no se eliminó');
    }


    /**
     *@test
     */
    public function cantDeleteUser()
    {
        $this->beginARandomUser();
        $user = factory(User::class)->create(
            ['type' => User::APPRAISER_ROLE]
        );
        $response = $this->delete('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(302);
        $this->assertTrue(User::where('id', $user->id)->exists(), 'El usuario no debió eliminarse');
    }

    /**
     *@test
     */
    public function cantDeleteUserIfIsAdmin()
    {
        $this->beginARootUser();
        $user = $this->getARootUser();
        $response = $this->delete('/dashboard/usuarios/' . $user->id);
        $response->assertStatus(302);
        $this->assertTrue(User::where('id', $user->id)->exists(), 'El usuario admin no puede ser eliminado');
    }


}
