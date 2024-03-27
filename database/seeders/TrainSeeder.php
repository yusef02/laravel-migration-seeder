<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $train = new Train();


            $train->azienda = $faker->randomElement(['Trenord S.r.l.', 'Freccia Rossa', 'TGV']);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(20000, 50000);
            $train->numero_carrozze = $faker->numberBetween(2, 12);
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);


            $train->save();
        }
    }
}
