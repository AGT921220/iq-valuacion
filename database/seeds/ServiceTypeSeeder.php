<?php


use App\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ServiceType::SERVICE_TYPES as $serviceType) {
            $service = new ServiceType();
            $service->name = $serviceType;
            $service->save();
        }
    }
}
