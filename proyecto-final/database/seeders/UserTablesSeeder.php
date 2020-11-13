<?php

namespace Database\Seeders;
use App\User;

use Illuminate\Database\Seeder;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'John Smith',
            'email' => 'kevin_w97@hotmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
