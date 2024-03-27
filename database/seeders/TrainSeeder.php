<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {

            $train = new Train();

            $train->azienda = 'Trenord S.r.l.';
            $train->stazione_di_partenza = 'Milano';
            $train->stazione_di_arrivo = 'Bergamo';
            $train->orario_di_partenza = '18:00:00';
            $train->orario_di_arrivo = '20:00:00';
            $train->codice_treno = 'D839480';
            $train->numero_carrozze = '6';
            $train->in_orario = false;
            $train->cancellato = false;

            $train->save();
        }
    }
}
