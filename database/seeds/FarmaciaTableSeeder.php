<?php

use Illuminate\Database\Seeder;
use App\Models\Farmacia;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class FarmaciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         
        Farmacia::create([
            'nome' => $faker->name,
            'titular' => $faker->name,
            'nuit' => rand(),	
            'email'	=> $faker->unique()->safeEmail,
            'location' => $faker->address,
            'number' => '5365146',	
            'image'	=> 'farmacia1.jpg',
            'descricao'	=> Str::random(5),
            'quarteirao' => '12',	
            'pais_id' => '1',	
            'provincia_id' => '2',
            'bairro_id'	=> '3',
            'user_id' => '2',
            'video_link' => 'https://www.youtube.com/watch?v=f79bjznvBvE&t=18s',	
            'image_empresa' => 'farmacia1.jpg',
        ]);

        Farmacia::create([
            'nome' => $faker->name,
            'titular' => $faker->name,
            'nuit' => rand(),	
            'email'	=> $faker->unique()->safeEmail,
            'location' => $faker->address,
            'number' => '5365146',	
            'image'	=> 'farmacia2.jpg',
            'descricao'	=> Str::random(5),
            'quarteirao' => '12',	
            'pais_id' => '1',	
            'provincia_id' => '2',
            'bairro_id'	=> '3',
            'user_id' => '2',
            'video_link' => 'https://www.youtube.com/watch?v=f79bjznvBvE&t=18s',	
            'image_empresa' => 'farmacia2.jpg',
        ]);

        Farmacia::create([
            'nome' => $faker->name,
            'titular' => $faker->name,
            'nuit' => rand(),	
            'email'	=> $faker->unique()->safeEmail,
            'location' => $faker->address,
            'number' => '5365146',	
            'image'	=> 'farmacia3.png',
            'descricao'	=> Str::random(5),
            'quarteirao' => '12',	
            'pais_id' => '1',	
            'provincia_id' => '2',
            'bairro_id'	=> '3',
            'user_id' => '2',
            'video_link' => 'https://www.youtube.com/watch?v=f79bjznvBvE&t=18s',	
            'image_empresa' => 'farmacia3.png',
        ]);
        
    }
}
