<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FarmaciaTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersGroupSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        // $this->call(VendasTableSeeder::class);
    }
}
