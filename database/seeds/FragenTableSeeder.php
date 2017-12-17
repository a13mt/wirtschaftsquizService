<?php

use Illuminate\Database\Seeder;
use App\Frage;
use App\Fragebogen;
use App\Eingabe;
use App\Truefalse;
use App\Multiplechoice;

class FragenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fragebogen::create([
            'name' => 'Fragebogen1',
            'id_kategorie' => 1,
            'id_user' => 1,
        ]);


        for($i = 0; $i<5; $i++){
            for($j = 0; $j<3; $j++){
                Frage::create([
                    'frage' => 'frage'.$i,
                    'typ' => $j+1,
                    'id_antwort'=> $j,
                    'id_fragebogen' => 1,
                ]);
            }
            for($j = 0; $j<3; $j++) {
                Truefalse::create([
                    'antwort' => true,
                ]);
            }
            for($j = 0; $j<3; $j++) {
                Multiplechoice::create([
                    'antwort' => 'richtige antwort',
                    'falscheantwort1' => 'falsche antwort',
                    'falscheantwort2' => 'falsche antwort',
                    'falscheantwort3' => 'flasche antwort',
                ]);
            }
            for($j = 0; $j<3; $j++) {
                Eingabe::create([
                    'antwort' => 'richtige antwort',
                ]);
            }
        }



        for ($i = 0; $i < 5; $i++) {
            Kategorie::create([
                'kategorie' => "Kategorie".$i,
                'id_user' => $i,
            ]);
        }
    }
}
