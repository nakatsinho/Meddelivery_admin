<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'nome' =>'Polpa Laxante',
            'category_id' =>'1',
        ]);

        Subcategory::create([
            'nome' =>'Anabolisante Cardiovascular',
            'category_id' =>'2',
        ]);
    }
}
