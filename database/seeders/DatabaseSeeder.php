<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(SettingsSeeder::class);
        // $this->call(GeneralSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(SocialLinksSeeder::class);
        $this->call(SeoSeeder::class);
    }
}
