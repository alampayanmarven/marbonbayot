<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ParkingLot;
use App\Models\Motorcyle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ParkingLotSeeder::class);
        $this->call(MotorcycleSeeder::class);
        $this->call(CarSeeder::class);

    }
}
