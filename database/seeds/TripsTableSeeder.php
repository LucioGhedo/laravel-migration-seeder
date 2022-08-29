<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i < 5; $i++) {
            $new_trip = new Trip();
            $new_trip->id = 1 + $i;
            $new_trip->departure_date = $faker->dateTimeThisYear();
            $new_trip->end_date = $faker->dateTimeThisYear('+2 months');
            $new_trip->trip_description = $faker->randomHtml();
            $new_trip->trip_name = $i;
            $new_trip->price = $faker->numberBetween(50, 1000000);
            $new_trip->num_of_partecipant = $faker->numberBetween(1, 10);
            $new_trip->save();
        }
    }
}
