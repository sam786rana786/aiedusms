<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seo = [
            'meta_title' => 'A School Management System',
            'meta_keywords' => 'School Management, School, Management, School Management System, SMS',
            'meta_description' => 'This is a school management system for managing all the works of a school. This system optimizes all the work in a digital format.'
        ];

        Seo::insert($seo);
    }
}
