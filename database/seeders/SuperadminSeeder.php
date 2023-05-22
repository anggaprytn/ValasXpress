<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existingUser = User::where('email', 'superadmin@binus.ac.id')->first();

        if (!$existingUser) {
            User::create([
                'name' => 'Superadmin',
                'email' => 'superadmin@binus.ac.id',
                'password' => Hash::make('superadmin'),
            ]);
        }
    }
}
