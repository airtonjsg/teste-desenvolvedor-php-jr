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
        //factory(User::class,5)->create;

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
