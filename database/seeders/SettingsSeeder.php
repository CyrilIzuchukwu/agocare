<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'BigHit',
                'site_email' => 'support@bighit.com',
                'site_phone' => '+1234567890',
                'site_address' => '123 BigHit Street, City, Country',
                'site_fb' => 'https://facebook.com/bighit',
                'site_instagram' => 'https://instagram.com/bighit',
                'site_twitter' => 'https://linkedin.com/company/bighit',
                'site_youtube' => 'https://youtube.com/bighit',
            ]
        );
    }
}
