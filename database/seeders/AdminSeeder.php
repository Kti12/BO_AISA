<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name' => 'Admin',
                'email' => 'admin.soro@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('soro'), // password
                
            ]);
            $user->assignRole('client', 'admin');
    }
}
