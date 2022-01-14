<?php
use App\User;
use App\Domicilio;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminUser = new User();
        $adminUser->name='Admin';
        $adminUser->email='admin@iq.com';
        $adminUser->paternal_surname='Admin';
        $adminUser->maternal_surname='Admin';
        $adminUser->business='Admin';
        $adminUser->type=User::ADMIN_ROLE;
        $adminUser->user_profile='/images/profile-empty.png';
        $adminUser->password =Hash::make('agt123');
        $adminUser->save();
    }
 

}