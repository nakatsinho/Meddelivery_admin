<?php

use Illuminate\Database\Seeder;
use App\Models\UserGroup;

class UsersGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserGroup::create([
            'id' => '1',
            'nome'=> 'General admin', 
        ]);


        UserGroup::create([
            'id' => '2',
            'nome'=> 'Farm admin', 
        ]);

        UserGroup::create([
            'id' => '3',
            'nome'=> 'Normal user', 
        ]);
    }
}
