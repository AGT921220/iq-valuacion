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
        $adminUser->name = 'Admin';
        $adminUser->email = 'admin@iq.com';
        $adminUser->paternal_surname = 'Admin';
        $adminUser->maternal_surname = 'Admin';
        $adminUser->business = 'Admin';
        $adminUser->type = User::ADMIN_ROLE;
        $adminUser->user_profile = '/images/profile-empty.png';
        $adminUser->password = Hash::make('agt123');
        $adminUser->save();


        $clientUser = new User();
        $clientUser->name = 'Client';
        $clientUser->email = 'client@iq.com';
        $clientUser->paternal_surname = 'Client';
        $clientUser->maternal_surname = 'Client';
        $clientUser->business = 'Client';
        $clientUser->type = User::CLIENT_ROLE;
        $clientUser->user_profile = '/images/profile-empty.png';
        $clientUser->password = Hash::make('agt123');
        $clientUser->save();


        for ($i = 1; $i <= 10; $i++) {
            $appraiserUser = new User();
            $appraiserUser->name = 'Perito' . $i;
            $appraiserUser->email = 'perito' . $i . '@iq.com';
            $appraiserUser->paternal_surname = 'Perito' . $i;
            $appraiserUser->maternal_surname = 'Perito' . $i;
            $appraiserUser->business = 'Perito' . $i;
            $appraiserUser->type = User::APPRAISER_ROLE;
            $appraiserUser->user_profile = '/images/profile-empty.png';
            $appraiserUser->password = Hash::make('agt123');
            $appraiserUser->save();
        }
    }
}
