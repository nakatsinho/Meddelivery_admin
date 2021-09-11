<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Kelton Mauro',
            'surname'=> 'Cumbe',
            'username'=> 'Kcumbe',
            'email'=> 'teste@gmail.com',
            'password' => bcrypt('demo00'),
            'number'=> '842536927',
            'sexo' => 'Masculino',
            'nascimento' => '1997-09-15',
            'altura' => '1.64',
            'talta' => '180',
            'profissao' => 'Software Developer',
            'tbaixa' => '98',
            'raca' => 'Negra',
            'user_group_id' => '1',
        ]);

        User::create([
            'name'=> 'Osvaldo Gamer',
            'surname'=> 'Gamer',
            'username'=> 'Osvaldo Gamer',
            'email'=> 'osvaldobanze008@gmail.com',
            'password' => bcrypt('demo00'),
            'number'=> '847668513',
            'sexo' => 'Masculino',
            'nascimento' => '1998-03-12',
            'altura' => '1.64',
            'talta' => '180',
            'profissao' => 'Software Developer',
            'tbaixa' => '98',
            'raca' => 'Negra',
            'user_group_id' => '2',
            'farmacia_id' => '1',
        ]);

        User::create([
            'name'=> 'Silvestre Salomao ',
            'surname'=> 'Banze',
            'username'=> 'Silvestre Salomao',
            'email'=> 'silvestresalomao@gmail.com',
            'password' => bcrypt('demo00'),
            'number'=> '847668513',
            'sexo' => 'Masculino',
            'nascimento' => '1998-03-12',
            'altura' => '1.64',
            'talta' => '180',
            'profissao' => 'Software Developer',
            'tbaixa' => '98',
            'raca' => 'Negra',
            'user_group_id' => '3',
        ]);
    }
}
