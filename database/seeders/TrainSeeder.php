<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\train;
use Faker\Generator as Faker;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $train = new Train;
            $train->azienda = $faker->word();
            $train->stazione_di_partenza  = $faker->randomElement(['Milano', 'Roma', 'Torino']);
            $train->stazione_di_arrivo =  $faker->randomElement(['Genova', 'Bologna', 'Lamezia']);
            $train->orario_di_partenza = $faker->numberBetween(9, 11);
            $train->orario_di_arrivo = $faker->numberBetween(15, 18);
            $train->codice_treno = $faker->ean13();
            $train->numero_carrozze = $faker->numberBetween(1, 10); 
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
        }
    }
}