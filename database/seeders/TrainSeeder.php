<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $Train = new Train;
            $Train->azienda = $faker->word();
            $Train->stazione_di_partenza  = $faker->randomElement(['Milano', 'Roma', 'Torino']);
            $Train->stazione_di_arrivo =  $faker->randomElement(['Genova', 'Bologna', 'Lamezia']);
            $Train->orario_di_partenza = $faker->numberBetween(9, 11);
            $Train->orario_di_arrivo = $faker->numberBetween(15, 18);
            $Train->codice_treno = $faker->ean13();
            $Train->numero_carrozze = $faker->numberBetween(1, 10); 
            $Train->in_orario = $faker->boolean();
            $Train->cancellato = $faker->boolean();
        }
    }
}