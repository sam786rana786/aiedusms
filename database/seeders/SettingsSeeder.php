<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'type' => 'email',
            'label' => 'email_from',
            'description' => 'AIEDU'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_host',
            'description' => 'mailpit'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_port',
            'description' => '1025'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_security',
            'description' => 'ssl'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_email',
            'description' => 'null'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_username',
            'description' => 'null'
        ]);
        Setting::create([
            'type' => 'email',
            'label' => 'smtp_password',
            'description' => 'null'
        ]);
        Setting::create([
            'type' => 'local',
            'label' => 'timezone',
            'description' => 'UTC +5:30'
        ]);
        Setting::create([
            'type' => 'local',
            'label' => 'date_format',
            'description' => 'd-m-Y'
        ]);
        Setting::create([
            'type' => 'local',
            'label' => 'time_format',
            'description' => 'H:i:s'
        ]);
        Setting::create([
            'type' => 'local',
            'label' => 'currency',
            'description' => '₹'
        ]);
    }
}
