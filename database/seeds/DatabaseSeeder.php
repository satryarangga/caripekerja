<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(WorkerCategorySeeder::class);
        $this->call(TableTopupPackageSeeder::class);
        $this->call(TablePaymentMethodSeeder::class);
    }
}
