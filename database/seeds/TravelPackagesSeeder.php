<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\travel_package;


class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $travel_package = new travel_package();
            $travel_package->title_package = $faker->catchPhrase();
            $travel_package->from = $faker->city();
            $travel_package->to = $faker->city();
            $travel_package->leaving_on = $faker->dateTimeThisYear();
            $travel_package->returning_on = $faker->dateTimeThisYear('+7 days');
            $travel_package->people = $faker->randomDigitNotNull();
            $travel_package->all_inclusive= $faker->boolean();
            $travel_package->save();
        }
    }
}
