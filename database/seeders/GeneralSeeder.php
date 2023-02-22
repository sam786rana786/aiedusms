<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = [
            'school_name' => 'Vivekanand Public School',
            'short_name' => 'VPS',
            'site_name' => 'vpswarisaliganj.in',
            'email' => 'viveka_wrs@rediffmail.com',
            'address' => 'Warisaliganj, Nawada, Bihar',
            'phone' => '9418145454'
        ];

        General::insert($school);
    }
}
