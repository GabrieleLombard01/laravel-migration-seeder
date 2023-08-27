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

        $trains = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Chivasso',
                'arrival_station' => 'Torino',
                'departure_time' => "19:30:10",
                'arrival_time' => "19:50:10",
                'train_code' => 06,
                'number_coaches' => 7,
                'in_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Crescentino',
                'arrival_station' => 'Chivasso',
                'departure_time' => "09:30:10",
                'arrival_time' => "09:45:10",
                'train_code' => 43,
                'number_coaches' => 5,
                'in_time' => false,
                'deleted' => true,
            ],
            [
                'agency' => 'Frecciarossa',
                'departure_station' => 'Torino',
                'arrival_station' => 'Milano',
                'departure_time' => "20:30:10",
                'arrival_time' => "21:15:10",
                'train_code' => 04,
                'number_coaches' => 7,
                'in_time' => true,
                'deleted' => false,
            ],
        ];

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
