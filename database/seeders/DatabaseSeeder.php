<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ketua',
            'username' => 'ketua',
            'password' => \Hash::make('ketua'),
            'role' => 'ketua',
        ]);
        User::create([
            'name' => 'Bendahara',
            'username' => 'bendahara',
            'password' => \Hash::make('bendahara'),
            'role' => 'bendahara'
        ]);
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => \Hash::make('admin'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Guest',
            'username' => 'guest',
            'password' => \Hash::make('guest'),
            'role' => 'guest'
        ]);
    }
}
