<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Radmir',
            'email' => 'nigmradmir@yandex.ru',
            'password' => bcrypt('1234'),
            'role' => 'administrator'
        ]);
    }
}
