<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains = [
            [
                'business_company' => 'Italo',
                'departure_station' => 'Firenze SMN',
                'arrival_station' => 'Benevento',
                'departure_hour' => '09:17',
                'arrival_hour' => '13:45',
                'carriages' => '9',
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'business_company' => 'Trenitalia Regionale Veloce',
                'departure_station' => 'Firenze Rifredi',
                'arrival_station' => 'Empoli',
                'departure_hour' => '17:00',
                'arrival_hour' => '17:30',
                'carriages' => '1',
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'business_company' => 'Frecciarossa',
                'departure_station' => 'Milano C.Le',
                'arrival_station' => 'Bari',
                'departure_hour' => '07:10',
                'arrival_hour' => '20:00',
                'carriages' => '5',
                'on_time' => false,
                'cancelled' => true,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->business_company = $train['business_company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_hour = $train['departure_hour'];
            $newTrain->arrival_hour = $train['arrival_hour'];
            $newTrain->carriages = $train['carriages'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}