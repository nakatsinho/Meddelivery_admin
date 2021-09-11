<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'farmacia_id' => '1',
            'nome_pro' => 'Hibrofem',
            'codigo_pro' => 'HFM285',
            'info_pro' => 'medicamento hibrofemo pra sinusite',
            'preco_pro' => '1120',
            'category_id' => '1',
            'subcategory_id' => '1',
            'spl_price' => '1',
            'tax' => '100',
            'stock' => '10',
            'subcategory_id' => '1',
            'image' => 'QfCA675uyN3WyOS2cbNsMEsOtPHGUf4hXWyHfuGb.jpeg',
        ]);

        Product::create([
            'farmacia_id' => '1',
            'nome_pro' => 'Hibrofem',
            'codigo_pro' => 'HFM285',
            'info_pro' => 'medicamento hibrofemo pra sinusite',
            'preco_pro' => '110',
            'category_id' => '1',
            'subcategory_id' => '1',
            'spl_price' => '1',
            'tax' => '100',
            'stock' => '10',
            'subcategory_id' => '1',
            'image' => 'QfCA675uyN3WyOS2cbNsMEsOtPHGUf4hXWyHfuGb.jpeg',
        ]);
        Product::create([
            'farmacia_id' => '2',
            'nome_pro' => 'Viagra',
            'codigo_pro' => 'HFM285',
            'info_pro' => 'Produtos sexes e lachantes a deriva',
            'preco_pro' => '120',
            'category_id' => '1',
            'subcategory_id' => '1',
            'spl_price' => '1',
            'tax' => '100',
            'stock' => '10',
            'subcategory_id' => '1',
            'image' => 'QfCA675uyN3WyOS2cbNsMEsOtPHGUf4hXWyHfuGb.jpeg',
        ]);
    }
}
