<?php

use App\ClientType;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $clientTypes = [
            'Inmobiliaria',
            'Particular',
            'Brocker',
            'Corredor',
            'Asesor certificado',
            'Particular'
        ];
        foreach ($clientTypes as $clientType) {
            $client = new ClientType();
            $client->name = $clientType;
            $client->save();
        }
    }
}
