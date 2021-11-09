<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Journey;
class JourneysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newJourney = new Journey();
            $newJourney->departure = $faker->city();
            $newJourney->arrival = $faker->city();
            $newJourney->departure_date = $faker->date('Y-m-d');
            $date = new DateTime($newJourney->departure_date);
            $newJourney->arrival_date = $date->add(new DateInterval('P'.rand(5,20).'D'))->format('Y-m-d');
            $newJourney->description = $faker->paragraph();
            $newJourney->price_per_person = $faker->randomFloat(2, 250, 5000);
            $newJourney->registration_deadline = $date->sub(new DateInterval('P60D'))->format('Y-m-d');
            $newJourney->save();
        }
    }
}
