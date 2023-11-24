<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loc = Location::firstOrCreate(['name' => 'Bukidnon']);

        $loc->sites()->firstOrCreate([
            'name' => 'Mt. Kalatungan'
        ], [
            'area' => 300,
            'seedballs_max' => 300000,
        ]);
    }
}
