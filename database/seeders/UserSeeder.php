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
        $users = User::factory()->count(20)->create();

        $users->each( function ($user) {
           $user->assignRole('user');
        });



        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'mobile' => '88888888888',
            'password' => Hash::make('123456'),
        ])->assignRole('admin');
    }
}
