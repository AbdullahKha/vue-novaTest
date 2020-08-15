<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => "admin@admin.com",
            'password' => bcrypt('123456'),
            'name' => "admin",
            'remember_token' => Str::random(20),
        ]);
        User::create([
            'email' => "user@user.com",
            'password' => bcrypt('123456'),
            'name' => "user",
            'remember_token' => Str::random(20),
        ]);
    }
}
