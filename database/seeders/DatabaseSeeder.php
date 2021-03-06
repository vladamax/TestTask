<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
           'email' => 'vm@gmail.com',
           'password' => bcrypt('123'),
            'otpEnabled' => true
        ]);

        User::factory()->create([
            'email' => 'zj@gmail.com',
            'password' => bcrypt('123'),
                        'otpEnabled' => false
        ]);
    }
}
