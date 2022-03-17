<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = Country::create(['name' => 'Italy']);
        $country->cities()->create(['name' => 'Rome']);
        $country->cities()->create(['name' => 'Pisa']);
        $country->cities()->create(['name' => 'Milan']);
        $country->cities()->create(['name' => 'Livorno']);
        $country->cities()->create(['name' => 'Florence']);
        $country->cities()->create(['name' => 'Cagliari']);

        $country = Country::create(['name' => 'United Kingdom']);
        $country->cities()->create(['name' => 'London']);
        $country->cities()->create(['name' => 'Manchester']);
        $country->cities()->create(['name' => 'Liverpool']);

        $country = Country::create(['name' => 'United States']);
        $country->cities()->create(['name' => 'Washington']);
        $country->cities()->create(['name' => 'New York City']);
        $country->cities()->create(['name' => 'Denver']);
    }
}
