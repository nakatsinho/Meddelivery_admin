<?php

use Illuminate\Database\Seeder;
use App\Models\ProdVendidos as Sold; 

class VendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sold::create([
            'pro_id' =>'1',
            'farmacia_id' =>'1',
            'quantidade' =>'1212',
            'preco_prod' =>'34',
            'user_id' =>'3',
        ]);

        Sold::create([
            'pro_id' =>'3',
            'farmacia_id' =>'3',
            'quantidade' =>'12',
            'preco_prod' =>'80',
            'user_id' =>'3',
        ]);


        Sold::create([
            'pro_id' =>'7',
            'farmacia_id' =>'1',
            'quantidade' =>'1',
            'preco_prod' =>'2500',
            'user_id' =>'3',
        ]);


        Sold::create([
            'pro_id' =>'1',
            'farmacia_id' =>'1',
            'quantidade' =>'8',
            'preco_prod' =>'1120',
            'user_id' =>'3',
        ]);


    }
}
