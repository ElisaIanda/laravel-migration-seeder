<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){
            $trains= New Train();

            $trains->azienda = $faker->company();
            $trains->stazione_di_partenza = $faker->city();                          
            $trains->stazione_di_arrivo = $faker->city();                            
            $trains->orario_di_partenza = $faker->time();
            $trains->orario_di_arrivo = $faker->time();
            $trains->data = $faker->dateTimeInInterval('-7 days', '+14 days');
            $trains->codice_treno = $faker->numberBetween(10000, 99999);
            $trains->numero_carrozze = $faker->numberBetween(1, 10);
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->save();
        }
    }
}
