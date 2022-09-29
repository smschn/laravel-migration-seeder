<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // inizializzare faker
        $faker = \Faker\Factory::create('it_IT'); // aggiunti rispetto alla documentazione ufficiale: backslash iniziale (per compatibilità con Laravel) e lingua italiana.

        for ($i=0; $i<5; $i++) {
            $newTrain = new Train(); // affinché prenda la classe Train, devo importarla con 'use App\Train'.
            $newTrain->company = $faker->word(); // genera una parola casuale.
            $newTrain->departure_station = $faker->city(); // genera una città casuale italiana (perché è settata la lingua italiana).
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time(); // genera un orario casuale nel formato hh-mm-ss.
            $newTrain->arrival_time = $faker->time();
            $newTrain->departure_date = $faker->date(); // genera data casuale nel formato yyyy-mm-dd.
            $newTrain->train_code = $faker->randomNumber(5, true); // ritorna numeri casuali SEMPRE con 5 cifre (perché il secondo parametro è settato su TRUE).
            $newTrain->carriage_number = $faker->randomNumber(2, true);
            $newTrain->on_schedule = $faker->numberBetween(0, 1); // la colonna 'on_schedule' accetta valori booleani: cioè 0 e 1.
            $newTrain->cancelled = $faker->numberBetween(0, 1); // come riga sopra
            $newTrain->save(); // salvare il nuovo oggetto della classe Train creato: ATTENZIONE, il treno è salvato in Laravel NON nel database: per inviarlo al database da terminale si digita: 'php artisan db:seed --class=TrainsTableSeed', comando che esegue la funzione run() di questo file.
        }

    }
}