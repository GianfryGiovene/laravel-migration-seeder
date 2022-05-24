<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->company= $faker->company();
            $newTrain->departure_station= $faker->city();
            $newTrain->arrival_station= $faker->city();
            $newTrain->departure_time= $faker->dateTimeBetween('-1 year', '+1 year');
            $newTrain->arrival_time= $faker->dateTimeBetween('-1 year', '+1 year');
            $newTrain->train_code= strval($faker->numerify('train-####'));
            $newTrain->number_of_carriages= $faker->numberBetween(3,22);
            $newTrain->is_in_time= $faker->boolean();
            $newTrain->is_deleted= $faker->boolean();

        }
    }
}
