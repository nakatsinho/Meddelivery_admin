<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nome' =>'Laxantes',
            'descricao' =>'Produtos relaxantes sei la oque!!',
        ]);

        Category::create([
            'nome' =>'Anabolisantes',
            'descricao' =>'Produtos extimulantes de performance fisica!!',
        ]);
    }
}
