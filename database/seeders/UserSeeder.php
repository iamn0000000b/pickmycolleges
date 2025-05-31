<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'email_verified_at' => now(),
           'password' => Hash::make('12345678'),
           'is_admin' => 1,
        ]);
    }
}
