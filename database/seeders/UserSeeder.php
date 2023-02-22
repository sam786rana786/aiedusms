<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = [
            'name' => 'Admin',
            'email' => 'admin@aiedu.com',
            'password' => bcrypt('secret123'),
            'school_id' => 1
        ];
        $user = User::insert($superAdmin);
        // $user->assignRole('Super Admin');
    }
}
