<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //import library for mock-up data

class TrainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(Faker $faker): void
  {
    /*
    $table->string('company', 30)->nullable(false);
    $table->string('arrival_station', 30)->nullable(false);
    $table->string('departure_station', 30);
    $table->datetime('arrival_time')->nullable(false);
    $table->datetime('departure_time')->nullable(false);
    $table->char('identification_number', 20)->nullable(false);
    $table->tinyInteger('cars_number',false, true);
    $table->boolean('on_time')->nullable(false);
    $table->boolean('cancelled')->default(false)->nullable(true);
    */

    //
    for ($i = 0; $i < 10; $i++) {
      $newTrain = new Train();
      $newTrain->company = $faker->name();
      $newTrain->arrival_station = $faker->streetName();
      $newTrain->arrival_time = $faker->dateTimeInInterval('-0 days', '+5 days');
      $newTrain->departure_station = $faker->streetName();
      $newTrain->departure_time = $faker->dateTimeInInterval('-0 days', '+5 days');
      $newTrain->identification_number = 'IT' . $faker->randomNumber(9);
      $newTrain->cars_number = $faker->randomNumber(2);
      $newTrain->on_time = $faker->boolean(80);
      $newTrain->cancelled = $faker->boolean(10);
      $newTrain->save();
    }
  }
}
