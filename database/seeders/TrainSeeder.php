<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();

        $new_train->agency = 'Trenitalia';
        $new_train->departure_station = 'Chivasso';
        $new_train->arrival_station = 'Torino';
        $new_train->departure_time = "19:30:10";
        $new_train->arrival_time = "19:50:10";
        $new_train->train_code = 03;
        $new_train->number_coaches = 7;
        $new_train->in_time = true;
        $new_train->deleted = false;

        $new_train->save();
    }
}
