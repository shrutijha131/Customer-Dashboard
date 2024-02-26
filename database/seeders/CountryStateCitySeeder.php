<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         /*----- US Country Data-----*/
        $country = Country::create(['name' => 'United State']);
  
        $state = State::create(['country_id' => $country->id, 'name' => 'Florida']);
  
        City::create(['state_id' => $state->id, 'name' => 'Miami']);
        City::create(['state_id' => $state->id, 'name' => 'Tampa']);
  
        /*----- India Country Data-----*/
        $country = Country::create(['name' => 'India']);
  
        $state = State::create(['country_id' => $country->id, 'name' => 'Maharashtra']);
  
        City::create(['state_id' => $state->id, 'name' => 'Pune']);
        City::create(['state_id' => $state->id, 'name' => 'Mumbai']);
    }
}
