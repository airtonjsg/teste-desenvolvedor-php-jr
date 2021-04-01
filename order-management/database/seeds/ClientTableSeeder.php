<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Cliente::class,5)->create;

        Client::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'cpf' => str_random(11),
        ]);
    }
}
