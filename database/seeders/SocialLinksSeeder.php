<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $social = [
            'facebook' => 'https://www.facebook.com/jawalamukhi.sics.9',
            'twitter' => 'https://twitter.com/AkshiptikaI',
            'youtube' => 'https://www.youtube.com/@akshiptikainfotech3426',
            'linkedin' => 'https://www.linkedin.com/in/munish-rana-379a9133/'
        ];

        SocialLink::insert($social);
    }
}
