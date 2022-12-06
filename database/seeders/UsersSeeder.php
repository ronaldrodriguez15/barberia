<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ronald Danilo Rodriguez',
            'last_name' => 'Rodriguez',
            'email' => 'ronalddanilo1234@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
